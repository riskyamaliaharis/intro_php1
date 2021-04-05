<?php
include_once('../handlers/product.php');
getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <table class="table table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach(getList() as $value){
            ?>
            <tr>
                <td><?= $value['name']?></td>
                <td><?= $value['description']?></td>
                <td><?= $value['price']?></td>
                <td><?= $value['stock']?></td>
                <td>
                    <a href='../handlers/product.php?id_delete=<?= $value['id']?>' class="btn btn-danger">Delete Product</a>
                    <a href='./updateProduct.php?id_update=<?= $value['id']?>' class="btn btn-success">Update Product</a>
                </td>
            </tr>

            <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    
</body>
</html>