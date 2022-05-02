<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $name = $_POST['catename'];
    $cate = $_POST['cate'];
    $sql = "INSERT INTO popular (href, name) VALUES ('$cate', '$name')";
    $result = $db->send($sql);
    if ($result){
        echo "Cate added:".$name;
    }
   
    
?>