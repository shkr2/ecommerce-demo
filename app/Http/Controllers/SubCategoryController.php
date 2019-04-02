<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Product;
use Illuminate\Http\Request;

class SubCategoryController extends Controller {

    public function getRelatedProducts(Request $request, $id, $slug) {
        $request->validate([
            'order_by' => 'numeric|min:1|max:6',
            'pagination' => 'numeric|min:1|max:4',
        ]);

        $sort_list = [
            1 => ['rating', 'desc'],
            2 => ['rating', 'asc'],
            3 => ['title', 'asc'],
            4 => ['title', 'desc'],
            5 => ['price', 'asc'],
            6 => ['price', 'desc'],
        ];

        $pagination_list = [
            1 => 8,
            2 => 16,
            3 => 24,
            4 => 32,
        ];

        $order_by = $request->order_by;
        $pagination = $request->pagination;


        $current_s_category = SubCategory::where('id', $id)->where('slug', $slug)->first();

        $products = $current_s_category->products()->orderBy($sort_list[$order_by][0] ?? 'rating', $sort_list[$order_by][1] ?? 'desc')->paginate($pagination_list[$pagination] ?? 8);

        return view('products.products')->with(['products' => $products, 'current_s_category' => $current_s_category]);
    }

}
