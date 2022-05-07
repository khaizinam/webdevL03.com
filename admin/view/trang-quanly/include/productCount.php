<?php
    include "../../../config/config.php";
    include "../../../model/header/conn.php";
    $db = new DataBase();
    $query = "SELECT COUNT(ID)
            FROM product
        ";
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT COUNT(product.ID)
                FROM product
                LEFT JOIN cate 
                ON product.ID = cate.productID
                WHERE cate.cate = '$cate'
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