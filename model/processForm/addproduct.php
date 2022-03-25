<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $productname = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    // $image = $_POST['image'];
    $detail = $_POST['detail'];
    $imageurl = 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176e/renew-run-2-road-running-shoe-jlw8gb.png';
    if($productname && $price && $type){
        $sql = "INSERT INTO `product` (`name`,`img`,`amount`,`price`,`detail`,`star`) VALUES ('$productname','$imageurl',0,'$detail',$price,0)";
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