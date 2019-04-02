<?php

use Gloudemans\Shoppingcart\Facades\Cart;

function getCartCalculation() {
    $subtotal = 0;

    foreach (Cart::content() as $item)
        $subtotal += $item->price * $item->qty;

    $tax = Cart::count() * 2;

    $vat = $subtotal * 0.2;
    $total = $subtotal + $vat + $tax;

    return collect([
        'subtotal' => $subtotal,
        'tax' => $tax,
        'vat' => $vat,
        'total' => $total,
    ]);
}