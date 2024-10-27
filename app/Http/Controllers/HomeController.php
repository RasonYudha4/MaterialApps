<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\OrderMaterial;

class HomeController extends Controller
{
    public function create() 
    {
        $Orders = OrderMaterial::all();
        $Materials = Material::all();

        return view('home', [
            'materials' => $Materials,
            'orders' => $Orders
        ]);
    }
}
