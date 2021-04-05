<?php
include_once("../config/db.php");
if (isset($_POST['btn_add'])){
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'stock' => $_POST['stock']
    ];
    insert($data);
}

function insert($data){
    global $conn;
    $name = $conn->real_escape_string($data['name']);
    $desc = $conn->real_escape_string($data['description']);
    $price = $conn->real_escape_string($data['price']);
    $stock = $conn->real_escape_string($data['stock']);

    $insert = $conn->query("INSERT INTO tbl_products (name, description, price, stock) VALUE ('$name', '$desc', '$price', '$stock')");

    if(!$insert) die("canceled");
    echo "product added <br />
         <a href='../view/showProducts.php'>Back</a>";
}

function getList(){
    global $conn;
    $result = [];
    $query = $conn->query("SELECT * FROM tbl_products");
    while ($row = $query->fetch_assoc()){
        array_push($result, $row);
    }
    return $result;
}

if(isset($_GET['id_delete'])){
    $id = $_GET['id_delete'];
    $delete = $conn->query("DELETE FROM tbl_products WHERE id='$id'");
    if(!$delete) die("delete failed");
    echo "delete success <br />
         <a href='../view/showProducts.php'>Back</a>";
}

function detail($id){
    global $conn;
    $query = $conn->query("SELECT * FROM tbl_products WHERE id='$id'");
    $detail = $query->fetch_assoc();
    return $detail;
}

function update($data, $id){
    global $conn;
    $update = $conn->query("UPDATE FROM tbl_products ()");
}
?>