<?php
    include "../config/config.php";
    include "../public/header/conn.php";
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $user_var = new DataBase();
    $result = $user_var->link->query("SELECT * FROM user WHERE username='{$username}'");
    if ($result->num_rows>0){
        $row = $result->fetch_assoc();
        if ($password!=$row['password']){
            echo '<script>
                    alert("Mật khẩu không đúng!");
                    window.history.back();
                </script>';
        }
        else{
            if ($row['type']==1){
                echo "Khach";
            }
            else if ($row['type']==0){
                echo "Addmin";
            }
        }
    }
    else{
        echo '<script>
                alert("Tài khoản không tồn tại!");
                window.history.back();
            </script>';
        
    }
?>