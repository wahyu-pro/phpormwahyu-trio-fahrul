<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    // protected $table = "items";
    // protected $timestamp = true;
    protected $guarded = ["order_id", "item_id"]; //mass input

    // public function todos()
    // {
    //     return $this->hashMany('Demo\Models\Todo');
    // }
}