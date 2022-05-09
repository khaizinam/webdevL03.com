<?php
    include '../header/header.php';
    $db = new DataBase();
    $key = $_GET['id'];
    $sql = "DELETE FROM user WHERE ID='$key'";
    $result = $db->send($sql);
    if ($result){
        echo "delete account successfully $key";
    }else{
        echo "Can't delete account";
    }
?>