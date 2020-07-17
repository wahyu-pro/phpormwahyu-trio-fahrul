<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;

use Demo\Models\OrderDetail;

class OrderDetailController
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return $orderDetails;
    }

    public function findById($id)
    {
        $orderDetailId = OrderDetail::find($id);
        return $orderDetailId;
    }

    public function create($object)
    {
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $object->order_id;
        $orderDetail->item_id = $object->item_id;
        $orderDetail->save();

        return $orderDetail;
    }

    public function update($object, $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->order_id = $object->order_id;
        $orderDetail->item_id = $object->item_id;
        $orderDetail->save();

        return $orderDetail;
    }

    public function delete($id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->delete();

        return $orderDetail;
    }
}