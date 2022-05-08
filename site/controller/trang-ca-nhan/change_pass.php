<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/userModel/UserModel.php";

$userModel = new UserModel();

$id = $_REQUEST['id'];
$old_pass = $_REQUEST['old_pass'];
$new_pass = $_REQUEST['new_pass'];

// 1: Co loi xay ra
// 2: Mat khau cu khong dung
// 3: Doi mat khau thanh cong

$result = $userModel->ChangePass($id, $old_pass, $new_pass);

if ($result) echo $result;