<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $key = $_GET['id'];
    $productname = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $detail = $_POST['detail'];
    $imageurl = '';
    if(isset($_FILES['image'])){
        $img_opt =  $_FILES['image']['name'];
        $img_opt_tmp =  $_FILES['image']['tmp_name'];
        move_uploaded_file($img_opt_tmp,'../../controller/assets/img/productimg/'.$img_opt);
        $imageurl = "controller/assets/img/productimg/$img_opt";
    }
    if($productname && $price && $type){
        if($imageurl !== ''){
            $sql ="UPDATE product 
                SET name='$productname', price= $price, detail='$detail', img = '$imageurl'
                WHERE ID = $key
            ";
        }else{
            $sql ="UPDATE product 
                SET name='$productname', price= $price, detail='$detail'
                WHERE ID = $key
            ";
        }
        $result = $db->send($sql);
        $sql ="UPDATE cate SET cate ='$type' WHERE productID = $key";
        $result = $db->send($sql);
        if ($result){
            echo 'update successfully';
        }
    }else{
        echo 'Invalid info';
    }
?>