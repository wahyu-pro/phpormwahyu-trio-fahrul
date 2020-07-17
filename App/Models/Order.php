<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;
use Demo\Models\OrderDetail;

class Order extends Model
{
    protected $table = "orders";
    // protected $timestamp = true;
    protected $guarded = ["id", "customer_id", "amount", "user_id"]; //mass input

    // public function order_detail()
    // {
    //     // return $this->hashMany('OrderDetail');
    // }

    // public function orderdetail()
    // {
    //     return $this->hashMany('Demo\Models\OrderDetail');
    // }
}