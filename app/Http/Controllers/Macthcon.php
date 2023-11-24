<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Macthcon extends Controller
{
    public function perkalian(){
        $data['name'] = 'Mycalculator';
        return view('pages_math', $data);
    }
}
