<?php

namespace App\Http\Controllers;

use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller {
    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug) {
        $product = Product::where('id', $id)->where('slug', $slug)->first();
        return view('products.product_detail', ['product' => $product]);
    }
}
