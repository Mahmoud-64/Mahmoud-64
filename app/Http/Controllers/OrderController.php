<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all(); 
       // dd($orders);
        // return view('orders.index', [
        //   'orders' => $orders,
        // ]);
        return view('orders.create');
    }

    public function create()
    {
      return view('orders.create');
    }

    public function store(Request $request)
    { 
      Order::create([
        'order_user_name'=>$request->order_user_name,
        'delivering_address'=>$request->delivering_address,
        'doctor_name'=>$request->doctor_name,
        'is_insured'=>$request->is_insured,
        'status'=>$request->status,
        'creator_type'=>$request->creator_type,
        'assigned_pharmacy _name'=>$request->assigned_pharmacy_name,
        'Actions'=>$request->Actions,
      ]);

     // return redirect()->route('layouts.app');
    }


    public function edit()
    {
     $request = request();
     $orderId = $request->order;
     $order = Order::find($orderId);
     return view('orders.edit',[
         'order' => $order,
     ]);
    }

    public function update(Request $request)
    {   
    $orderId = $request->order;
    Order::where('id', $orderId)
        ->update([
            'order_user_name'=>$request->order_user_name,
            'delivering_address'=>$request->delivering_address,
            'doctor_name'=>$request->doctor_name,
            'is_insured'=>$request->is_insured,
            'status'=>$request->status,
            'creator_type'=>$request->creator_type,
            'assigned_pharmacy _name'=>$request->assigned_pharmacy_name,
            'Actions'=>$request->Actions,
          ]);

    //return redirect()->route('posts.index');
    }

}
