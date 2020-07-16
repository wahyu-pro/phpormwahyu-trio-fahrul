<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    // protected $table = "items";
    // protected $timestamp = true;
    protected $guarded = ["order_id", "item_id"]; //mass input

    public function order()
    {
        return $this->belongsTo('Demo\Models\Order');
    }

    public function item()
    {
        return $this->belongsTo('Demo\Models\Item');
    }
}