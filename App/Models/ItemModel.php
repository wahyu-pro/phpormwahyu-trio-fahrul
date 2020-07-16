<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // protected $table = "items";
    // protected $timestamp = true;
    protected $guarded = ["id", "name", "description", "price"]; //mass input

    // public function todos()
    // {
    //     return $this->hashMany('Demo\Models\Todo');
    // }
}