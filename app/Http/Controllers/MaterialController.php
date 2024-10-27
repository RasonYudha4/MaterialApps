<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Order;

class MaterialController extends Controller
{
    public function create()
    {
        $orders = Order::all();
        return view('form2', compact('orders'));
    }

    public function store(Request $request)
    {
        Material::create([
            'names' => $request->input('material_name'),
            'days' => $request->input('days')
        ]);
        return redirect('/form3');
    }
}
