<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form2Controller extends Controller
{
    public function index(Request $request){
        return view('form2');
    }
}
