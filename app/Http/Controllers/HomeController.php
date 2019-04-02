<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featured = Product::orderBy('rating', 'desc')->take(24)->get();
        $latest = Product::orderBy('created_at', 'desc')->take(24)->get();

        return view('home')->with(['featured' => $featured, 'latest' => $latest]);
    }
}
