<?php
    include "../../../config/config.php";

    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $id = $_REQUEST['id'];
    $old_pass = $_REQUEST['old_pass'];
    $new_pass = $_REQUEST['new_pass'];
    

    $result = $conn->query("SELECT `password` FROM `user` WHERE `id` = $id");
    $row = $result->fetch_assoc();
    if ($old_pass != $row['password']){
        echo "Mật khẩu cũ không đúng!";
    }
    else{  
        $sql = "UPDATE `user` SET `password`='$new_pass' WHERE `id`=$id";
        $result = $conn->query($sql);
        if ($result){
            echo "Đã đổi mật khẩu!";
        }
        else{
            echo "Có lỗi xảy ra!";
        }
    }

?>