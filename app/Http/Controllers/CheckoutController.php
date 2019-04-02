<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Cart::instance('default')->count() == 0) {
            return redirect()->route('home.index');
        }

        return view('checkout.checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request) {

        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
        }

        $order = $this->addToOrdersTables($request, null);
        $this->decreaseQuantities();
        Cart::instance('default')->destroy();
        return redirect()->route('cart.index')->with([
            'success_message' => 'Your order has been successfully saved!',
            'errors' => collect(['Sorry, but payment system is not available now because its demo ecommerce application'])
            ]);
    }

    protected function addToOrdersTables($request, $error) {
        $cart_data = getCartCalculation();

        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_province' => $request->province,
            'billing_postalcode' => $request->postalcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_subtotal' => $cart_data['subtotal'],
            'billing_tax' => $cart_data['tax'],
            'billing_vat' => $cart_data['vat'],
            'billing_total' => $cart_data['total'],
            'error' => $error,
        ]);

        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }
        return $order;
    }

    protected function decreaseQuantities() {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);
            $product->update(['available_quantity' => $product->available_quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable() {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);
            if ($product->available_quantity < $item->qty) {
                return true;
            }
        }
        return false;
    }
}