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
        $workOrders = OrderMaterial::all();

        // Initialize sumPercentage as an associative array
        $sumPercentage = [];

        // Loop through each workOrder to accumulate the percentages based on orderId
        foreach ($workOrders as $workOrder) {
            // Get the orderId for the current workOrder
            $orderId = $workOrder->orderId;

            // Check if the orderId already exists in the sumPercentage array
            if (!isset($sumPercentage[$orderId])) {
                $sumPercentage[$orderId] = 0; // Initialize it to 0 if it doesn't exist
            }

            // Add the current workOrder's percentage to the corresponding orderId
            $sumPercentage[$orderId] += $workOrder->Percentage;
        }

        return view('form3', [
            'materials' => $Materials,
            'orders' => $Orders,
            'percentage' => $sumPercentage
        ]);
    }


    public function store(Request $request)
    {

        // Fetch all orders
        $Orders = Order::all();
        $workOrders = OrderMaterial::all();

        // Initialize sumPercentage as an associative array
        $sumPercentage = [];

        // Calculate the current sum of percentages for each orderId
        foreach ($workOrders as $workOrder) {
            $orderId = $workOrder->orderId;

            if (!isset($sumPercentage[$orderId])) {
                $sumPercentage[$orderId] = 0; // Initialize it to 0 if it doesn't exist
            }

            // Accumulate the percentage for each orderId
            $sumPercentage[$orderId] += $workOrder->Percentage;
        }
        $request->validate([
            'material_id' => 'required',
            'percentage' => 'required|integer|min:1|max:100',
        ]);

        $inputPercentage = $request->input('percentage');
        $orderId = $request->input('order_id');

        if (isset($sumPercentage[$orderId]) && ($sumPercentage[$orderId] + $inputPercentage > 100)) {
            // Show an error message (you can use session flash data or return a response)
            return redirect()->back()->withErrors(['percentage' => 'The total percentage for this order cannot exceed 100.']);
        }

        OrderMaterial::create([
            'orderId' => $orderId,
            'materialId' => $request->input('material_id'),
            'Percentage' => $inputPercentage,
        ]);

        return redirect('/form3');
    }
}
