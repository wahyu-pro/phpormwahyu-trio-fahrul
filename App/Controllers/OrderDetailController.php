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

    public function create(Request $request)
    {
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $request->input('order_id');
        $orderDetail->item_id = $request->input('item_id');
        $orderDetail->save();

        return $orderDetail;
    }

    public function update(Request $request, $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->order_id = $request->input('order_id');
        $orderDetail->item_id = $request->input('item_id');
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