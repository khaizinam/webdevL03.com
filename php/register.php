<?php
    include "../config/config.php";
    include "../public/header/conn.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_var = new DataBase();
    $result = $user_var->link->query("INSERT INTO `user` (`username`,`password`) VALUES ('{$username}','{$password}')");
    if ($result){
        echo '<script>
                location.href = "../public/login/login.html";
            </script>
            ;';
    }
?>