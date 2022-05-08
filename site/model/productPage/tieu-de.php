<?php 
//SHOW name of category.
//Nguyen Huu Khai 07/05/2022
    include "./header.php";
    $db = new DataBase();
    $cate = $_GET['cate'];
    if($cate != "all"){
        $query = "SELECT * FROM cate WHERE `href` = '$cate'";
        $sql = $db->send($query);
        $row = $sql->fetch_assoc();
        $data = array($row['href'],$row['name']);
    }else {
        $data = array("all","Trang Chủ");
    }
    $json = json_encode($data);
    echo $json;
?>