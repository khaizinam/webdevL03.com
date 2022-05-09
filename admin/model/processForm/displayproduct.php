<?php
    include '../header/header.php';
    $db = new DataBase();
    $page = 1;
    $paging = 0;
    $limit = 7;
    $cate = 'all';
    $search = "";
    if(isset($_GET['page'])) $page = $_GET['page'];
    if(isset($_GET['cate'])) $cate = $_GET['cate'];
    if(isset($_GET['limit'])) $limit = $_GET['limit'];
    if(isset($_GET['search'])) $search = $_GET['search'];
    $data =array();
    $paging = ($page-1) * $limit;
    $limitpage = $paging + $limit;
    $query = "";
    if($cate != "all"){
        $query = "SELECT *
        FROM product
        WHERE cate ='$cate'";
    }
    else{
        $query = "SELECT *
            FROM product";
    }
    if($search != ""){
        if($cate != "all") {
            $query.="AND name LIKE '%$search%'";
        }else{
            $query.="WHERE name LIKE '%$search%'";
        }
    }
    $query.=" ORDER BY ID DESC LIMIT $paging,$limitpage";
    $sql = $db->send($query);
    if($sql != 'fail'){
        while($rows = $sql->fetch_array()){
            array_push($data, array('id' => $rows['ID'],
                'name' => $rows['name'],
                'cate' => $rows['cate'],
                'price' => $rows['price'],
                'amount' => $rows['amount'],
                'detail' => $rows['detail']
            ));
        }
        $returndata = array('data'=>$data, 'page'=>$page, 'cate'=>$cate, 'limit'=>$limit);
        echo json_encode($returndata);
    }else{
        echo "SQL fail";
    }
?>