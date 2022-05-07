<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $key = $_GET['id'];
    $amount = $_POST['amount'];
    $sql ="UPDATE product 
        SET amount='$amount'
        WHERE ID = $key
    ";
    $result = $db->send($sql);
    if ($result){
        echo 'update successfully';
    }else{
        echo 'Invalid info';
    }
?>