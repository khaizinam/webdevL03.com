<?php
    include "../config/config.php";
    include "../public/header/conn.php";
    $username = $_REQUEST["username"];
    $user_var = new DataBase();
    $result = $user_var->link->query("SELECT * FROM user WHERE username='{$username}'");
    if ($result->num_rows>0){
        echo "Đã tồn tại";
    }
    else{
        echo "";
    }
?>