<?php
    $url = "../../../controller/";
    include "../../../config/config.php";
    include "../../../model/header/conn.php";
    $db = new DataBase();
    $page = 1;
    $paging = 0;
    $cate = 'all';
    if(isset($_GET['page'])) $page = $_GET['page'];
    if(isset($_GET['cate'])) $cate = $_GET['cate'];
    $data =array();
    $paging = ($page-1)* 7;
    $limit = $paging + 7;
    $query = "";
    if($cate != "all"){
        $cate = $cate;
        $query = "SELECT ID,name,cate,price,amount,detail
        Where cate ='$cate'
        ORDER BY ID DESC
        LIMIT $paging,$limit";
    }
    else{
        $query = "SELECT ID,name,cate,price,amount,detail
            FROM product 
            ORDER BY ID DESC              
            LIMIT $paging,$limit";
    }
    $sql = $db->send($query);
    
    while($rows = $sql->fetch_array()){
        array_push($data, array('id' => $rows['ID'],
            'name' => $rows['name'],
            'cate' => $rows['cate'],
            'price' => $rows['price'],
            'amount' => $rows['amount'],
            'detail' => $rows['detail']
        ));
    }
    echo json_encode($data);
?>