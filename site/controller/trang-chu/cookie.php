<?php
//Check cookie of website to login or not.
//Nguyen Huu khai
//08/05/2022
    if(Cookie::check("user-name") == true && Cookie::check("user-id") == true){
        $uName = Cookie::get("user-name");
        $uID = Cookie::get("user-id"); 
        $query = "SELECT *
        FROM user
        WHERE `username` = '$uName'
        AND `ID` = '$uID'";
        if($db->num($query) == 0){
            Cookie::set("check-login","no");
        }else {
            $sql = $db->send($query);
            $row = $sql->fetch_assoc();
            Cookie::set("user-name",$row["username"]);
            Cookie::set("user-id",$row["ID"]);
            Cookie::set("check-login","log");
        }
    }else{
        Cookie::set("check-login","no");
    }
?>