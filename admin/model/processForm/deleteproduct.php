<?php
    include '../header/header.php';
    $db = new DataBase();
    $key = $_GET['id'];
    $sql = "DELETE FROM product WHERE ID='$key'";
    $result = $db->send($sql);
    if ($result){
        echo "delete product successfully";
    }
?>