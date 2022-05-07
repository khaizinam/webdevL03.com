<?php
    include '../header/header.php';
    $db = new DataBase();
    $query = "SELECT href,name FROM popular";
    $sql = $db->send($query);
    $data = array();
    while($rows = $sql->fetch_array()){
        array_push($data, array(
            'cate' => $rows['href'],
            'name' => $rows['name']
        ));
    }
    echo json_encode($data);
?>