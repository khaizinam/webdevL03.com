<?php
    include_once "../../../config/config.php";

    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $user_id = $_REQUEST['user_id'];

    $result = $conn->query("SELECT * FROM `transaction` WHERE `customer`=$user_id");

    $array = [];
    while($row = $result->fetch_assoc()){
        $data = [
            'ID' => $row['ID'],
            'product_name' => $row['product_name'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'time' => $row['time']
        ];
        array_push($array,$data);
    }
    echo json_encode($array);
    
?>