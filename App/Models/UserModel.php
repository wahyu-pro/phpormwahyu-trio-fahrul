<?php

namespace Demo\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // protected $table = "users";
    // protected $timestamp = true;
    protected $guarded = ["id", "name", "email"]; //mass input

    // public function todos()
    // {
    //     return $this->hashMany('Demo\Models\Todo');
    // }
}