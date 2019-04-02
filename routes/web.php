<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('home.index');

Route::get('products/{id}/{slug}', 'ProductController@show')->name('products.show');

Route::get('mcategories/{id}/{slug}', 'MainCategoryController@getRelatedSubCategoriesAndProducts')->name('main_categories.getRelatedSubCategoriesAndProducts');

Route::get('scategories/{id}/{slug}', 'SubCategoryController@getRelatedProducts')->name('sub_categories.getRelatedProducts');

Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('checkout', 'CheckoutController@store')->name('checkout.store');
//Route::post('paypal-checkout', 'CheckoutController@paypalCheckout')->name('cart.paypal');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
