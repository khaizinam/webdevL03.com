<?php
    include '../header/header.php';
    $db = new DataBase();
    $key = $_POST['id'];
    $sql = "SELECT type FROM user WHERE ID = '$key'";
    $result = $db->send($sql);
    $type = 1;
    while($rows = $result->fetch_array()){
        $type = $rows[0];
    }
    if($type != 0){
        $sql = "DELETE FROM user WHERE ID='$key'";
        $result = $db->send($sql);
        if ($result){
            echo "delete account successfully $key";
        }else{
            echo "SQL ERR";
        }
    }else{
        echo "Can't delete admin account";
    }
?>