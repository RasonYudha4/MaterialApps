<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create() 
    {
        return view('form1');
    }

    public function store()
    {
        $ordermaterial = Order::create([
            'Work_order_number' => $request->input('orderNum'),
            'date' => $request->input('date')
        ]);
    }
}
