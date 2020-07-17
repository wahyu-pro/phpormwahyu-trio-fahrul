<?php

require __DIR__ . '/vendor/autoload.php';

use Demo\Models\UserModel;
use Demo\Models\Item;
use Demo\Models\Order;
use Demo\Models\OrderDetail;

use Demo\Controllers\UserController;
use Demo\Controllers\ItemController;
use Demo\Controllers\OrderController;
use Demo\Controllers\OrderDetailController;

$user = new UserController();
if (isset($_POST["add"])) {
    $user->create((object)["name" => $_POST["name"], "email" => $_POST["email"]]);
}
$url = 'http://localhost/phpormwahyu-trio-fahrul';

// echo $user->index();
// echo "\n";
// echo $user->findById();
// echo "\n";
// echo $user->create((object)["name"=>"Wahyu", "email"=>"wahyu@gmail.com"]);

// $item = new ItemController();
// echo $item->index();
// echo "\n";
// echo $item->findById();
// echo "\n";
// echo $item->create((object)["title"=>"Mau Makan", "completed"=>1, "user_id"=>1]);

// $order = new OrderController();
// echo $order->index();
// echo "\n";
// echo $order->findById();
// echo "\n";
// echo $order->create((object)["title"=>"Mau Makan", "completed"=>1, "user_id"=>1]);

// $orderDetail = new OrderDetailController();
// echo $orderDetail->index();
// echo "\n";
// echo $orderDetail->findById();
// echo "\n";
// echo $orderDetail->create((object)["title"=>"Mau Makan", "completed"=>1, "user_id"=>1]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mockup</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav class="navbar shadow navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <a class="nav-item nav-link active" href="#">User <span class="sr-only">(current)</span></a> -->
                <a class="nav-item nav-link" href=<?php echo $url ."/index.php" ?>>User</a>
                <a class="nav-item nav-link" href="<?php echo  $url .'/App/Views/order/index.php' ?>">Order</a>
                <a class="nav-item nav-link" href="<?php echo $url . '/App/Views/item/index.php' ?>">Items</a>
            </div>
        </div>
        <button type="button" class="btn btn-cream mr-3 shadow" data-toggle="modal" data-target="#exampleModal">Add</button>
    </nav>
    <div class="container">
        <table class="table shadow mt-3">
            <thead class="thead-cream">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($user->index() as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row['id']; ?>" class="btn-outline-primary"><i class="fa fa-edit"></i></a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-outline-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Input name ...">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Input email ...">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="add" class="btn btn-save">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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