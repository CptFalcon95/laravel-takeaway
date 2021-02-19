<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuEditorController extends Controller
{
    public function index() {
        return view('foodmenu.editor.menu');
    }
}
