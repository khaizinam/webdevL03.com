<?php
//Check cookie of website to login or not.
//Nguyen Huu khai
//08/05/2022
$uName = Cookie::get("user-name");
$uID = Cookie::get("user-id"); 
$query = "SELECT *
FROM user
WHERE `username` = '$uName'
AND `ID` = '$uID'";
if($db->num($query) == 0){
}else {
    $sql = $db->send($query);
    $row = $sql->fetch_assoc();
    Cookie::set("user-name",$row["username"]);
    Cookie::set("user-id",$row["ID"]);
}
?>