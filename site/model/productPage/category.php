<?php 
//SHOW name of all category.
//Nguyen Huu Khai 07/05/2022
    include "./header.php";
    $db = new DataBase();
        $query = "SELECT * FROM cate";
        $sql = $db->send($query);
        $data = array();
        if($db->num($query)!=0){
            while($rows = $sql->fetch_array()){
                array_push($data, array("href" => $rows['href'],
                "name" => $rows['name']));
            }
        }else {
            $data = array("href" => "",
            "name" => "");
        }
        $json = json_encode($data);
        echo $json;
?>