<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $key = $_POST['objectIDs'];
    $action = $_POST['action'];
    $idlist = implode(',',$key);

    if($action == 'delete'){
        $sql = "DELETE FROM product WHERE ID in ($idlist)";
        $result = $db->send($sql);
    }   
    $result = $db->send($sql);
    if ($result){
        echo 'action success';
    }
    
?>