<?php
    include "../../config/config.php";
    include "include/conn.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new DataBase();
    $sql = "INSERT INTO `user` (`user_name`,`password`) VALUES ('$username','$password')";
    $result = $db->send($sql);
    if ($result){
        echo '<script>
                location.href = "../../view/login/login.html";
            </script>
            ;';
    }
?>