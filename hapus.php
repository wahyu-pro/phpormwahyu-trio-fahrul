<?php
require __DIR__ . '/vendor/autoload.php';

use Demo\Controllers\UserController;

$user = new UserController();
$user->delete($_GET['id']);
header("location: index.php");
exit;
