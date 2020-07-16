<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// Capsule::schema()->dropIfExists("users");
Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->timestamps();
});

Capsule::schema()->create('orders', function ($table) {
    $table->increments('id');
    $table->integer('customer_id');
    $table->bigInteger("amount");
    $table->integer("user_id")->unsigned();
    $table->timestamps();
});

Capsule::schema()->create('items', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string("description");
    $table->integer("price");
    $table->timestamps();
});

Capsule::schema()->create('order_detail', function ($table) {
    $table->integer('order_id');
    $table->integer('item_id');
    $table->timestamps();
});



// Capsule::schema()->table('todos', function($table){
//     $table->foreign('user_id')->reference('id')->on('users')->onDelete('cascade');
// });