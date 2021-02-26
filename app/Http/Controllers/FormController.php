<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function serviceable(Request $request)
    // {
    //     $name = $request->input('name');
    //     dd($request->all());
    // }
        {
        $regex = '/^[1-9][0-9]{3} ?(?!sa|sd|ss)[a-z]{2}$/i';

        $postcode = !empty($_GET['p']) ? htmlentities($_GET['p']) : '1234 AB';
        $valid = preg_match($regex, $postcode, $matches);

        if($valid)
            {
            echo '<span style="color: #00FF00;">Goed</span>';    
            }
        else
            {
            echo '<span style="color: #FF0000;">Verkeerd!</span>';
            }
        echo '
            <form method="get" action="regex.postcode.php">
                <input type="text" name="p" value="'.$postcode.'" />
                <input type="submit" value="Check" />
            </form>';
        }
    }