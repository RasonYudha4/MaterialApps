<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderMaterial;
use App\Models\Order;
use App\Models\Material;

class OrderMaterialController extends Controller
{
    public function index(Request $request) 
    {
        $materials = Material::all();
        return view('materials', [
            'materials' => $materials
        ]);
    }

    public function create() 
    {
        $Orders = Order::all();
        $Materials = Material::all();

        return view('form3', [
            'orders' => $Orders,
            'materials' => $Materials
        ]);
    }

    public function store()
    {
        $ordermaterial = OrderMaterial::create([
            'Work_order_number' => $request->input('orderNum'),
            'materials' => $request->input('materials'),
            'percentage' => $request->input('percentage'),
        ]);
    }
}
