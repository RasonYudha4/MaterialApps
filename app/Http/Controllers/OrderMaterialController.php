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
    
        // $Orders = Order::all();
        $Materials = Material::all();
        $orderId = session('Work_order_number');
        // $order = Order::find($orderId);
    
        // $order = Order::find($request->input('work_order_number')); 
    
        // return view('form3', [
        //     'orders' => $Orders,
        //     'materials' => $Materials,
        //     'order' => $order, 
        // ]);


        return view('form3', [
            'materials' => $Materials,
            'order' => $orderId
        ]);
    }
    

    public function store(Request $request)
    {
        $orderId = session('work_number');

        $request->validate([
            'order_number' => 'required',
            'material_id' => 'required',
            'percentage' => 'required|integer|min:1|max:100',
        ]);

        OrderMaterial::create([
            'order_number' => $orderId,
            'material_id' => $request->input('material_id'),
            'percentage' => $request->input('percentage'),
        ]);

        return redirect('/form3');
    }
}
