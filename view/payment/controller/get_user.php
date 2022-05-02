<?php
    include_once "../../../config/config.php";

    $id = $_REQUEST['id'];
    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $result = $conn->query("SELECT * FROM `user` WHERE `id`=$id");
    $row = $result->fetch_assoc();
    $data = [
        'id' => $id,
        'fullname' => $row['full_name'],
        'phone_number' => $row['p_number'],
        'address' => $row['address']
    ];
    echo json_encode($data);
?>