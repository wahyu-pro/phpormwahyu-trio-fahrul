<?php
require __DIR__.'/../../../vendor/autoload.php';

use Demo\Controllers\OrderController;
use Demo\Controllers\UserController;

$order = new OrderController();
$user = new UserController();
if (isset($_POST["ubah"])) {
    $order->update((object)["customer_id" => $_POST["customer_id"], "amount" => $_POST["amount"], "user_id" => $_POST["user_id"]], $_GET['id']);
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
        <?php foreach ($order->index() as $order) : ?>
            <div class="form-group">
                <label>Customer Id</label>
                <input type="number" class="form-control" id="customer_id" value="<?php echo $order["customer_id"]; ?>" name="customer_id" placeholder="Input Customer Id ...">
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" value="<?php echo $order["amount"]; ?>" placeholder="Input Amount">
            </div>
        <?php endforeach; ?>
        <div class="form-group">
        <label>User Name</label>
            <select class="custom-select" name="user_id" required>
            <option selected disabled value="">Choose...</option>
                <?php foreach ($user->index() as $data): ?>
                    <option  value='<?php $data["id"]; ?>'><?php echo $data["name"]?></option>
                <?php endforeach;?>
            </select>
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