<?php
    include "../../../config/config.php";

    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $sql = "SELECT * 
    FROM `user` 
    WHERE `username`='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows==0){
        echo '<script>
                alert("Tài khoản không tồn tại!");
                window.history.back();
            </script>';
    }
    else{
        $row = $result->fetch_assoc();
        if ($password!=$row['password']){
            echo '<script>
                    alert("Mật khẩu không đúng!");
                    window.history.back();
                </script>';
        }
        else{
            if ($row['type']==1){
                echo "Customer";
            }
            else if ($row['type']==0){
                echo "Admin";
            }
        }  
    }
?>