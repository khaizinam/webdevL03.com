<?php
    $db = new DataBase();
    if(Cookie::check("user-name") == true && Cookie::check("user-id") == true){
        $uName = Cookie::get("user-name");
        $uID = Cookie::get("user-id"); 
        $query = "SELECT *
        FROM user
        WHERE `username` = '$uName'
        AND `ID` = '$uID'";
        if($db->num($query) == 0){
            header("Location: ../trang-dang-nhap/");
        }else {
            $sql = $db->send($query);
            $row = $sql->fetch_assoc();
            Cookie::set("user-name",$row["username"]);
            Cookie::set("user-id",$row["ID"]);
        }
    }else{
        header("Location: ../trang-dang-nhap/");
    }
?>