<?php
    include_once "../../../config/config.php";

    $id = $_REQUEST['id'];
    $product_name = $_REQUEST['product_name'];
    $price = $_REQUEST['price'];
    $quantity = $_REQUEST['quantity'];
    $customer = $_REQUEST['customer'];
    $time = date("d/m/Y - H:i");
    
    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $sql = "INSERT INTO `transaction` 
    (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`)
    VALUES
    ($id, '$product_name', $price, $quantity, $customer, '$time')";

    $result = $conn->query($sql);

    if ($result){
        echo "Thêm thành công!";
    }
    else{
        echo "Thêm thất bại!";
    }
    
?>