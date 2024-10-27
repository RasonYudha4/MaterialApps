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
        
            // Store the work_order_number in the session
            session(['Work_order_number' => $data->Work_order_number]);
        
            // Set a cookie that expires in 60 minutes
            Cookie::queue('Work_order_number', $data->Work_order_number, 60);
        
            return redirect(url('/form2'))->with('Work_order_number', $data->Work_order_number);
        }
    }
