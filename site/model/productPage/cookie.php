<?php
//Check cookie of website to login or not.
//Nguyen Huu khai
//08/05/2022
    include "./header.php";
    $db = new DataBase();
    if(Cookie::check("user-name") != false && Cookie::check("user-id") != false){
        $uName = Cookie::get("user-name");
        $uID = Cookie::get("user-id"); 
        $query = "SELECT *
        FROM user
        WHERE `username` = '$uName'
        AND `ID` = '$uID'";
        if($db->num($query) == 0){
            echo "no";
        }else {
            $sql = $db->send($query);
            $row = $sql->fetch_assoc();
            echo "log";
        }
    }else echo "no";
?>