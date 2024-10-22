<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function create() 
    {
        return view('form2');
    }

    public function store()
    {
        $ordermaterial = Material::create([
            'name' => $request->input('materialName'),
            'days' => $request->input('days'),
        ]);
    }
}
