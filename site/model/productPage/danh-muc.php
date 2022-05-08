<?php 
//SHOW name of category.
//Nguyen Huu Khai 07/05/2022
    include "./header.php";
    $db = new DataBase();
    $cate = $_GET['cate'];
    if($cate != "all"){
        $query_cate = "SELECT * FROM cate WHERE `href` = '$cate'";
        $sql_cate = $db->send($query_cate);
        $row_cate = $sql_cate->fetch_assoc();
    }
    
?>