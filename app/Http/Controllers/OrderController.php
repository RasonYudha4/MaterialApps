<?php

    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\Cookie;
    use Illuminate\Http\Request;
    use App\Models\Order;
    

    class OrderController extends Controller
    {
        public function create() 
        {
            
            return view('form1');
        }

        public function store(Request $request)
        {
            $data = Order::create([
                'Client' => $request->input('Client'),
                'Work_date' => $request->input('Work_date'),
            ]);
        
            return redirect(url('/form2'))->with('Work_order_number', $data->Work_order_number);
        }
    }
