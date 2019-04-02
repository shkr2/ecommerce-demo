<?php

namespace App\Http\Controllers;

use App\MainCategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainCategoryController extends Controller {


    public function getRelatedSubCategoriesAndProducts(Request $request, $id, $slug) {
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

        $current_m_category = MainCategory::where('id', $id)->where('slug', $slug)->first();
        $sub_categories = $current_m_category->subCategories()->get();

        $sub_categories_list = array();

        foreach ($sub_categories as $sub_category) {
            $sub_categories_list[] = $sub_category->id;
        }

        $products = Product::whereHas('categories', function ($query) use (&$sub_categories_list) {
            $query->whereIn('sub_category_id', $sub_categories_list);
        })->orderBy($sort_list[$order_by][0] ?? 'rating', $sort_list[$order_by][1] ?? 'desc')->paginate($pagination_list[$pagination] ?? 8);

        return view('sub_categories.sub_categories')->with(['products' => $products, 'current_m_category' => $current_m_category]);
    }


}
