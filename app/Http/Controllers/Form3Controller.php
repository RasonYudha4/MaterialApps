<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form3Controller extends Controller
{
    public function index(Request $request){
        return view('form3');
    }
}
