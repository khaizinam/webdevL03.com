<?php
    include "../../config/config.php";
    include "include/conn.php";
    $username = $_GET["username"];
    $db = new DataBase();
    $sql = "SELECT * FROM user WHERE user_name = '$username'";
    $result = $db->send($sql);
    if ($result->num_rows>0){
        echo "Đã tồn tại";
    }
    else{
        echo "";
    }
?>