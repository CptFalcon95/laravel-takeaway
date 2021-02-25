<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home', [
        'page' => 'home'
    ]);
});

Route::get('menu/builder', 'App\Http\Controllers\MenuBuilderController@index');
Route::post('menu/builder/add-category', 'App\Http\Controllers\MenuBuilderController@addCategory');

Route::get('restaurant', function () {
    return view('pages.restaurant', [
        'page' => 'restaurant'
    ]);
});

Route::post('places', 'App\Http\Controllers\FormController@serviceable')->name('serviceable');

Route::post('/filters', 'App\Http\Controllers\FilterController@filter')->name('filter');

Route::get('/', function () {
    return view('takeaway', [
        'page' => 'takeaway'
    ]);
});
