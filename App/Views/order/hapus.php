<?php
require __DIR__.'/../../../vendor/autoload.php';

use Demo\Controllers\OrderController;

$user = new OrderController();
$user->delete($_GET['id']);
header("location: index.php");
exit;
