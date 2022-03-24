<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $key = $_GET['id']
    $productname = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    // $image = $_POST['image'];
    $detail = $_POST['detail'];
    $imageurl = 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176e/renew-run-2-road-running-shoe-jlw8gb.png';
    if($productname && $price && $type){
        $sql ="UPDATE Customers
        SET 'name'=$productname,'price'= $price,'detail' = $detail
        WHERE ID = $key;
        "
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