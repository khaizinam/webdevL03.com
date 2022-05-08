<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/userModel/UserModel.php";

$userModel = new UserModel();

$id = $_REQUEST['id'] ?? 0;

$result = $userModel->GetInfo($id);

echo $result ?? "{}";