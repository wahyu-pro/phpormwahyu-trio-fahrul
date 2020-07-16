<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $table = "items";
    // protected $timestamp = true;
    protected $guarded = ["id", "customer_id", "amount", "user_id"]; //mass input

    // public function todos()
    // {
    //     return $this->hashMany('Demo\Models\Todo');
    // }
}