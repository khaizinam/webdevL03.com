<?php
    include "../../../config/config.php";

    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $id = $_REQUEST['id'];
    $fullname = $_REQUEST['fullname'];
    $phone_number = $_REQUEST['phone_number'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    $sql = "UPDATE `user`
    SET
    `full_name` = '$fullname',
    `p_number` = '$phone_number',
    `address` = '$address',
    `email` = '$email'
    WHERE `id` = $id
    ";

    $result = $conn->query($sql);
    if ($result){
        echo "Cập nhật thành công";
    }
    else{
        echo "Thất bại";
    }

?>