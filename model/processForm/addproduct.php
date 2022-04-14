<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $productname = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    // $image = $_POST['image'];
    $detail = $_POST['detail'];
    $target_dir = "../../controller/img/productimg";
    // echo $_FILES['image']
    if(isset($_FILES['image'])){
        $img_opt =  $_FILES['image']['name'];
        $img_opt_tmp =  $_FILES['image']['tmp_name'];
        move_uploaded_file($img_opt_tmp,'../../controller/assets/img/productimg/'.$img_opt);
        $imageurl = "controller/assets/img/productimg/$img_opt";
    }
        
    if($productname && $price && $type){
        $sql = "INSERT INTO `product` (`name`,`img`,`amount`,`price`,`detail`,`star`) VALUES ('$productname','$imageurl',0,$price,'$detail',0)";
        $result = $db->send($sql);
        $query="SELECT ID FROM product WHERE `name` = '$productname'";
        $sql = $db->send($query);
        while($rows = $sql->fetch_array()){
            $ID = $rows['ID'];
            $insertsql = "INSERT INTO cate (productID,cate) VALUE ('$ID','$type')";
            $db->send($insertsql);
        }
        if ($result){
            echo '<script>
                    location.href = "../../view/trang-quanly/index.php";
                </script>
                ;';
        }
    }else{
        echo 'Invalid info';
    }
?>