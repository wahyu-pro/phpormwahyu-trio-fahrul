<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;

use Demo\Models\Order;

class OrderController
{
    public function index()
    {
        $orders = Order::all();
        
        return $orders;
    }

    public function findById($id)
    {
        $orderId = Order::find($id);
        return $orderId;
    }

    public function create(Request $request)
    {
        $order = new Order();
        $order->customer_id = $request->input('customer_id');
        $order->amount = $request->input('amount');
        $order->user_id = $request->input('user_id');
        $order->save();

        return $order;
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->customer_id = $request->input('customer_id');
        $order->amount = $request->input('amount');
        $order->user_id = $request->input('user_id');
        $order->save();

        return $order;
    }

    public function delete(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delete();

        return $order;
    }
}