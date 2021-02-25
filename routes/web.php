<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home.home', [
        'page' => 'home'
    ]);
});

Route::get('restaurant', function () {
    return view('pages.restaurant.restaurant', [
        'page' => 'restaurant'
    ]);
});

Route::get('cart', function () {
    return view('pages.cart.cart', [
        'page' => 'cart'
    ]);
});

Route::get('checkout', function () {
    return view('pages.checkout.checkout', [
        'page' => 'checkout'
    ]);
});

Route::post('places', 'App\Http\Controllers\FormController@serviceable')->name('serviceable');