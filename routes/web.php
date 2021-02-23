<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('takeaway');
});

Route::post('/filters', 'App\Http\Controllers\FilterController@filter')->name('filter');