<?php
require __DIR__.'/../../../vendor/autoload.php';

use Demo\Controllers\ItemController;

$user = new ItemController();
$user->delete($_GET['id']);
header("location: index.php");
exit;
