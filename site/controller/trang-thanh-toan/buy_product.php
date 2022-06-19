<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/transactionModel/TransactionModel.php";
include "../../model/productModel/ProductModel.php";


$transactionModel = new TransactionModel();
$productModel = new ProductModel();

date_default_timezone_set("Asia/Ho_Chi_Minh");

$id = $_REQUEST['id'];
$product_name = $_REQUEST['product_name'];
$price = $_REQUEST['price'];
$quantity = $_REQUEST['quantity'];
$customer = $_REQUEST['customer'];
$address = $_REQUEST['address'];
$phone_number = $_REQUEST['phone_number'];
$time = date("d/m/Y - H:i");

if ($productModel->SubQuantity($id, $quantity)==1){
    if ($transactionModel->Insert($id, $product_name, $price, $quantity, $customer, $time, $phone_number, $address)){
        echo "True";
    }
    else{
        echo "False";
    }
}
else{
    echo "False";
}