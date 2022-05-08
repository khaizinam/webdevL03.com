<?php

    session_start();
    
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    include "../../model/userModel/UserModel.php"; 

    $username = $_REQUEST["username"] ?? "u";
    $password = $_REQUEST["password"] ?? "";


    $userModel = new UserModel();
    
    $result = $userModel->Login($username, $password);

    //2. Không tồn tại tài khoản
    //1. //Mật khẩu không đúng
    //Customer
    //Admin
    
    if ($result==2){
        echo '<script>
                alert("Tài khoản không tồn tại!");
                history.back();
            </script>';
    }

    else if ($result==1){
        echo '<script>
                alert("Mật khẩu không đúng!");
                history.back();
            </script>';
    }

    else if ($result=="Customer"){
        header("Location: ../../view/trang-chu/");
    }

    else if ($result=="Admin"){
        echo "Admin";
    }
?>