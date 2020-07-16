<?php

require __DIR__.'/vendor/autoload.php';

use Demo\Models\UserModel;
use Demo\Models\Item;
use Demo\Models\Order;
use Demo\Models\OrderDetail;

use Demo\Controllers\UserController;
use Demo\Controllers\ItemController;
use Demo\Controllers\OrderController;
use Demo\Controllers\OrderDetailController;

$user = new UserController();
echo $user->index();
// echo "\n";
// echo $user->findById();
// echo "\n";
// echo $user->create((object)["name"=>"Putri"]);

$item = new ItemController();
echo $item->index();
// echo "\n";
// echo $item->findById();
// echo "\n";
// echo $item->create((object)["title"=>"Mau Makan", "completed"=>1, "user_id"=>1]);

$order = new OrderController();
echo $order->index();
// echo "\n";
// echo $order->findById();
// echo "\n";
// echo $order->create((object)["title"=>"Mau Makan", "completed"=>1, "user_id"=>1]);

$orderDetail = new OrderDetailController();
echo $orderDetail->index();
// echo "\n";
// echo $orderDetail->findById();
// echo "\n";
// echo $orderDetail->create((object)["title"=>"Mau Makan", "completed"=>1, "user_id"=>1]);