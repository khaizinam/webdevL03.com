<?php 
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $query = "SELECT * FROM product ORDER BY ID DESC";
    $data =array();
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT product.ID,product.name,product.img,product.star,product.price 
            FROM product,cate 
            WHERE product.ID = cate.productID 
            AND cate.cate ='$cate'
            ORDER BY ID DESC";
        }
    }
    $sql = $db->send($query);
    while($rows = $sql->fetch_array()){
        array_push($data, array('id' => $rows['ID'],
        "url" => "../detail/index.php?view=".$rows['ID'],
        "img" => $rows['img'].".jpg",
        "c" => $rows['name'],
        "sold" => $rows['ID'],
        "cost" =>$rows['price'] ));
    }
    $json = json_encode($data);
    echo $json;
?>