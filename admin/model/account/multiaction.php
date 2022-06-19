<?php
    include '../header/header.php';
    $db = new DataBase();
    $key = $_POST['objectIDs'];
    $action = $_POST['action'];
    $idlist = implode(',',$key);

    if($action == 'delete'){
        $sql = "DELETE FROM user WHERE ID in ($idlist)";
        $result = $db->send($sql);
    }else{
        echo $action;
    }
    
    if ($result){
        echo 'action success';
    }
?>