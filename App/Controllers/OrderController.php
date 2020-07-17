<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;

use Demo\Models\Order;
use Demo\Models\User;
use Demo\Models\OrderDetail;

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

    public function create($object)
    {
        $order = new Order();
        $order->customer_id = $object->customer_id;
        $order->amount = $object->amount;
        $order->user_id = $object->user_id;
        $order->save();

        return $order;
    }

    public function update($object, $id)
    {
        $order = Order::find($id);
        $order->customer_id = $object->customer_id;
        $order->amount = $object->amount;
        $order->user_id = $object->user_id;
        $order->save();

        return $order;
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        return $order;
    }
}