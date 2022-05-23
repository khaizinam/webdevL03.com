<?php
    include '../header/header.php';
    $db = new DataBase();
    $name = $_POST['catename'];
    $cate = $_POST['cate'];
    $sql = "INSERT INTO cate (href, name) VALUES ('$cate', '$name')";
    $result = $db->send($sql);
    if ($result != 'fail') {
        echo "Cate added:".$name;
    }else {
        echo "Fail"
    }
   
    
?>