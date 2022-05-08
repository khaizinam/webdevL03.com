<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/userModel/UserModel.php";

$userModel = new UserModel();

$id = $_REQUEST['id'];

$result = $userModel->GetInfo($id);

if ($result!="{}") echo $result;