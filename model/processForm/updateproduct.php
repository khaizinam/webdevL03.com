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
<<<<<<< HEAD
        move_uploaded_file($img_opt_tmp,"../../controller/assets/img/productimg/$productname.jpg");
        $imageurl = "controller/assets/img/productimg/$productname.jpg";
    }
    if($productname && $price && $type){
        if($imageurl !== ''){
            $sql ="UPDATE product 
                SET name='$productname',cate ='$type',price= $price, detail='$detail', img = '$imageurl'
=======
        move_uploaded_file($img_opt_tmp,'../../controller/assets/img/productimg/'.$img_opt);
        $imageurl = "controller/assets/img/productimg/$img_opt";
    }
    
    if($productname && $price && $type){
        if($imageurl !== ''){
            echo $imageurl;
            $sql ="UPDATE product 
                SET name='$productname', price= $price, detail='$detail', img = '$imageurl'
>>>>>>> khanh
                WHERE ID = $key
            ";
        }else{
            $sql ="UPDATE product 
<<<<<<< HEAD
                SET name='$productname',cate ='$type',price= $price, detail='$detail'
=======
                SET name='$productname', price= $price, detail='$detail'
>>>>>>> khanh
                WHERE ID = $key
            ";
        }
        $result = $db->send($sql);
<<<<<<< HEAD
        if ($result){
            echo 'update successfully';
=======
        $sql ="UPDATE cate SET cate ='$type' WHERE productID = $key";
        $result = $db->send($sql);
        if ($result){
            echo '<script>
                    location.href = "../../view/trang-quanly/index.php";
                </script>
                ;';
>>>>>>> khanh
        }
    }else{
        echo 'Invalid info';
    }
?>