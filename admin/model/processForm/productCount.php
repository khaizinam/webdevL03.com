<?php
    include '../header/header.php';
    $db = new DataBase();
    if(isset($_GET['cate'])) $cate = $_GET['cate'];
    $query = "SELECT COUNT(ID)
            FROM product
        ";
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT COUNT(ID)
                FROM product
                WHERE cate = '$cate'
            ";
        }       
    }
    $sql = $db->send($query);
    $productCount = 0;
    while($rows = $sql->fetch_array()){
        $productCount = $rows[0];
    }
    echo $productCount;
?>