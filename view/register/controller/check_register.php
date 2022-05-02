<?php
    include "../../../config/config.php";

    $username = $_GET["username"];

    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);
    $sql = "SELECT * FROM user WHERE `username` = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows>0){
        echo "Đã tồn tại";
    }
    else{
        echo "";
    }
?>