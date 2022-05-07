<?php 
//SERACH product, encode to json to client.
//Nguyen Huu Khai 07/05/2022
    include "./header.php";
    $db = new DataBase();
    $search = $_GET['search'];
    $sql = "SELECT * 
        FROM product 
        WHERE name LIKE '%$search%' OR ID LIKE '%$search%'
        ORDER BY ID ASC LIMIT 5"; 
    $res = $db->send($sql);
    $count = $db->num($sql);
    if($count>0){
        $data = array();
        while($rows = $res->fetch_array()){
            array_push($data, array('id' => $rows['ID'],
            "name" => $rows['name']));
        }
        $json = json_encode($data);
        echo $json;
    }else echo "no data find";
?>