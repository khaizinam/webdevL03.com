<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/userModel/UserModel.php";

$userModel = new UserModel();

$id = $_REQUEST['id'] ?? 0;
$fullname = $_REQUEST['fullname'] ?? "";
$phone_number = $_REQUEST['phone_number'] ?? "";
$address = $_REQUEST['address'] ?? "";
$email = $_REQUEST['email'] ?? "";


$result = $userModel->Update($id, $fullname, $phone_number, $address, $email);

if ($result) {
    echo "Cập nhật thành công";
} else {
    echo "Thất bại";
}