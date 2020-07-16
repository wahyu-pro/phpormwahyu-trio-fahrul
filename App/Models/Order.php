<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    // protected $timestamp = true;
    protected $guarded = ["id", "customer_id", "amount", "user_id"]; //mass input

    public function user()
    {
        return $this->belongsTo('Demo\Models\User');
    }

    public function orderdetail()
    {
        return $this->hashMany('Demo\Models\OrderDetail');
    }
}