<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1Controller extends Controller
{
    public function index(Request $request){
        return view('form1');
    }
}
