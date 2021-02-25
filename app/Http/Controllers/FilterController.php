<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request)
    {
        return json_encode([
            'food' => 'mayo',
            'sauce' => 'lekker',
            'drinks' => [
                'cola',
                'fanta',
                'bier',
            ]
        ]);
    }
}
