<?php
    include '../header/header.php';
    $db = new DataBase();
    $key = $_POST['id'];
    $sql ="UPDATE user 
        SET type = 0
        WHERE ID = $key
    ";
    $result = $db->send($sql);
    if ($result){
        echo 'update successfully';
    }else{
        echo 'Invalid info';
    }
?>