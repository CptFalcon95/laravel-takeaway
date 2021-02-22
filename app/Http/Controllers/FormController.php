<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function serviceable(Request $request)
    {
        $name = $request->input('name');

        dd($request->all());
    }

}
