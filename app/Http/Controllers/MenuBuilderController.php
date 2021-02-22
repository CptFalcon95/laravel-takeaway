<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuBuilderController extends Controller
{
    //
    public function index() 
    {
        return view('business.menuBuilder.builder');
    }

    public function addCategory()
    {

    }
}
