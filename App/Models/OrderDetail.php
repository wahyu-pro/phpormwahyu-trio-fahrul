<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;
use Demo\Models\Order;

class OrderDetail extends Model
{
    protected $table = "order_detail";
    // protected $timestamp = true;
    protected $guarded = ["order_id", "item_id"]; //mass input

    public function order()
    {
        // return $this->belongsTo('Order', 'id');
    }

    // public function item()
    // {
    //     return $this->belongsTo('Demo\Models\Item');
    // }
}