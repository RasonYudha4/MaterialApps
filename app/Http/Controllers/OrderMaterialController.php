<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderMaterial;
use App\Models\Order;
use App\Models\Material;

class OrderMaterialController extends Controller
{
    public function create(Request $request) 
    {
        $Orders = Order::all();
        $Materials = Material::all();

        return view('form3', [
            'materials' => $Materials,
            'orders' => $Orders
        ]);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            // 'work_order_number' => 'required',
            'material_id' => 'required',
            'percentage' => 'required|integer|min:1|max:100',
        ]);

        OrderMaterial::create([
            'orderId' => $request->input('order_id'),
            'materialId' => $request->input('material_id'),
            'Percentage' => $request->input('percentage'),
        ]);

        return redirect('/form3');
    }
}
