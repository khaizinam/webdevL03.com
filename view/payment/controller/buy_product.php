<?php
    include_once "../../../config/config.php";

    date_default_timezone_set("Asia/Ho_Chi_Minh");

    $id = $_REQUEST['id'];
    $product_name = $_REQUEST['product_name'];
    $price = $_REQUEST['price'];
    $quantity = $_REQUEST['quantity'];
    $customer = $_REQUEST['customer'];
    $address = $_REQUEST['address'];
    $phone_number = $_REQUEST['phone_number'];
    $time = date("d/m/Y - H:i");
    
    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $sql = "INSERT INTO `transaction` 
    (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`, `phone_number`, `address`)
    VALUES
    ($id, '$product_name', $price, $quantity, $customer, '$time', '$phone_number', '$address')";

    $result = $conn->query($sql);

    if ($result){
        echo "True";
    }
    else{
        echo "False";
    }
    
?>