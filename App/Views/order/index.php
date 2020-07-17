<?php

require __DIR__.'/../../../vendor/autoload.php';

use Demo\Models\User;
// use Demo\Models\Item;
// use Demo\Models\Order;
// use Demo\Models\OrderDetail;

use Demo\Controllers\UserController;
use Demo\Controllers\OrderController;
use Demo\Controllers\ItemController;
use Demo\Controllers\OrderDetailController;
// use Demo\Controllers\OrderDetailController;

$order = new OrderController();
$item = new ItemController();
$user = new UserController();
$orderDetail = new OrderDetailController();
if (isset($_POST["add"])) {
    $order->create((object)["customer_id"=>$_POST["customer_id"], "amount"=>$_POST["amount"], "user_id"=>$_POST["user_id"], "item_id"=>$_POST["item_id"]]);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order CRUD</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../style.css">

</head>

<body>

    <nav class="navbar shadow navbar-light bg-light">
        <a class="navbar-brand ml-2">Navbar</a>
        <form class="form-inline">
            <input class="form-control src" type="search" placeholder="Search" aria-label="Search">
        </form>
        <button type="button" class="btn btn-cream mr-3 shadow tampilModalTambah" data-toggle="modal" data-target="#exampleModal">Add</button>
    </nav>
    <div class="container">
        <table class="table shadow mt-3">
            <thead class="thead-cream">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Customer id</th>
                    <th scope="col">Amount</th>
                    <th scope="col">User name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($order->index() as $row):
                    $user_name = $order->findById($row["user_id"]);

                    //   print_r($row);
                ?>

                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['customer_id']; ?></td>
                    <td><?= $row['amount']; ?></td>
                    <td><?= $row->User["name"]; ?> </td>
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
                            <input type="number" class="form-control" id="customer_id" name="customer_id" placeholder="Input Customer Id ...">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="amount" name="amount" placeholder="Input Amount">
                        </div>
                        <div class="form-group">
                        <label>User Name</label>
                            <select class="custom-select" name="user_id" required>
                            <option selected disabled value="">Choose...</option>
                                <?php foreach ($user->index() as $data):?>
                                    <option  value='<?php echo $data["id"]; ?>'><?php echo $data["name"]?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                        <label>Item</label>
                            <select class="custom-select" name="item_id" required>
                            <option selected disabled value="">Choose...</option>
                                <?php foreach ($item->index() as $data):?>
                                    <option  value='<?php echo $data["id"]; ?>'><?php echo $data["name"]?></option>
                                <?php endforeach;?>
                            </select>
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