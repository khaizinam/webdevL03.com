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
        move_uploaded_file($img_opt_tmp,"../../../public/img/productimg/$productname.jpg");
        $imageurl = "public/img/productimg/$productname.jpg";
    }
        
    if($productname && $price && $type){
        $sql = "INSERT INTO `product` (`name`,cate,`img`,`amount`,`price`,`detail`,`star`) VALUES ('$productname','$type','$imageurl',0,$price,'$detail',0)";
        $result = $db->send($sql);
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