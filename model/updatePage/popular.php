<?php 
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $query = "SELECT * FROM popular ORDER BY num ASC";
    $data =array();
    $sql = $db->send($query);
    while($rows = $sql->fetch_array()){
        array_push($data, array('href' => $rows['href'],
        "name" => $rows['name']));
    }
    $json = json_encode($data);
    echo $json;
?>