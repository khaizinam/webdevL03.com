<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/userModel/UserModel.php";

$username = $_REQUEST["username"] ?? "u";

$userModel = new UserModel();

$result = $userModel->CheckUser($username);

if ($result) echo "Đã tồn tại!";