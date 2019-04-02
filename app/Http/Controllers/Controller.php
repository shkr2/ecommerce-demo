<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use App\MainCategory;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        $mcategories = MainCategory::orderBy('id')->take(8)->get();
        $bestsellers = Product::orderBy('rating', 'desc')->take(5)->get();

        View::share([
            'mcategories' => $mcategories,
            'bestsellers' => $bestsellers,
            ]);
    }

}
