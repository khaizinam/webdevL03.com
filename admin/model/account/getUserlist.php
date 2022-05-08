<?php
    include '../header/header.php';
    $db = new DataBase();
    $page = 1;
    $paging = 0;
    $limit = 7;
    $type = 'all';
    $search = '';
    if(isset($_GET['page'])) $page = $_GET['page'];
    if(isset($_GET['type'])) $type = $_GET['type'];
    if(isset($_GET['limit'])) $limit = $_GET['limit'];
    if(isset($_GET['search'])) $search = $_GET['search'];
    $data =array();
    $paging = ($page-1) * $limit;
    $limitpage = $paging + $limit;
    $query = "";
    if($type != "all"){
        $query = "SELECT *
        FROM user
        WHERE type = $type, username LIKE '%$search%'
        ORDER BY ID DESC
        LIMIT $paging,$limitpage";
    }
    else{
        $query = "SELECT *
            FROM user
            WHERE username LIKE '%$search%'
            ORDER BY ID DESC              
            LIMIT $paging,$limit";
    }
    $sql = $db->send($query);
    
    while($rows = $sql->fetch_array()){
        array_push($data, array('id' => $rows['ID'],
            'name' => $rows['full_name'],
            'type' => $rows['type'],
            'pnum' => $rows['p_number'],
            'address' => $rows['address'],
            'email' => $rows['email']
        ));
    }
    $returndata = array('data'=>$data, 'page'=>$page, 'type'=>$type, 'limit'=>$limit);
    echo json_encode($returndata);
?>