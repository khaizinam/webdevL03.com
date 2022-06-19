<?php
    include '../header/header.php';
    $db = new DataBase();
    $query = "SELECT COUNT(ID)
            FROM user
        ";
    if(isset($_GET['type'])){
        if($_GET['type'] != "all"){
            $type = $_GET['type'];
            $query = "SELECT COUNT(id)
                FROM user
                WHERE type = '$type'
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