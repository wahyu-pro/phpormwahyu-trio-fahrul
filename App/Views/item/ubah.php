<?php
require __DIR__.'/../../../vendor/autoload.php';

use Demo\Controllers\ItemController;
use Demo\Controllers\UserController;

$order = new ItemController();
$user = new UserController();
if (isset($_POST["ubah"])) {
    $order->update((object)["name" => $_POST["name"], "description" => $_POST["description"], "price" => $_POST["price"]], $_GET['id']);
    header("location: index.php");
    exit;
}

$get = $order->findById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Order</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <br>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="customer_id" value="<?= $get['name']; ?>" name="name" placeholder="Input Customer Id ...">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= $get['description']; ?>" placeholder="Input Description">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" id="amount" name="price" value="<?= $get['price']; ?>" placeholder="Input Amount">
            </div>
            <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>