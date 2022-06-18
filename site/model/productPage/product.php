<?php 
//GET product, encode to json to client.
//Nguyen Huu Khai 10/05/2022
    include "./header.php";
    $db = new DataBase();
    $page = $_GET['page'];
    $cate = $_GET['cate'];
    $limit = 20;
    $getstart = ($page - 1) * $limit;
    $query = "SELECT * FROM product  LIMIT $getstart,$limit";
    if($cate != "all"){
        $query = "SELECT * 
        FROM product 
        WHERE `cate` = '$cate'
        LIMIT $getstart,$limit";
    }
    $sql = $db->send($query);
    $count = $db->num($query);
    if($count>0){
        $data = array();
        while($rows = $sql->fetch_array()){
            array_push($data, 
            array(
                'id' => $rows['ID'],
                'img' => $rows['img'],
                'name' => $rows['name'],
                'price' => $rows['price'],
                'amount' => $rows['amount']
            ));
        }
        $json = json_encode($data);
        echo $json;
    }else echo "no";
?>