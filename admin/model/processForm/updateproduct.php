<?php
    include '../header/header.php';
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
        // $imgtyp = explode(".", $img_opt)[1];
        move_uploaded_file($img_opt_tmp,"../../../public/img/productimg/$productname.jpg");
        $imageurl = "public/img/productimg/$productname.jpg";
    }
    if($productname && $price && $type){
        if($imageurl !== ''){
            $sql ="UPDATE product 
                SET name='$productname',cate ='$type',price= $price, detail='$detail', img = '$imageurl'
                WHERE ID = $key
            ";
        }else{
            $sql ="UPDATE product 
                SET name='$productname',cate ='$type',price= $price, detail='$detail'
                WHERE ID = $key
            ";
        }
        $result = $db->send($sql);
        if ($result){
            echo 'update successfully';
        }
    }else{
        echo 'Invalid info';
    }
?>