<?php

include_once('../handlers/product.php');
$id;
if (isset($_GET['id_update'])){
    $id = $_GET['id_update'];
}

$detail = detail($id);
var_dump($detail);

// if (isset($_POST['btn_update'])){
//     $data = [
//         'name' => $_POST['name'],
//         'description' => $_POST['description'],
//         'price' => $_POST['price'],
//         'stock' => $_POST['stock']
//     ];
//     update($data, $id);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./updateProduct.css"> 
    <title>Document</title>
</head>
<body>
    <header>
        <h1 style="text-align:center;" class="mt-4">UPDATE PRODUCT</h1>
    </header>
    <div class="container">
        <form action="" method="POST" >

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" value="<?=$detail['name']?>" class="form-control" id="name" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" value="<?=$detail['description']?>" class="form-control" id="description" placeholder="Description"></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" value="<?=$detail['price']?>" name="price" id="price" rows="3" placeholder="Price"/>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" value="<?=$detail['stock']?>" id="stock" rows="3" placeholder="Stock"/>
            </div>

            <div style="text-align:right;">
             <button type="submit" name="btn_update"  class="btn btn-warning">Add Product</button>
            </div>
        </form>
    </div>
</body>
</html>