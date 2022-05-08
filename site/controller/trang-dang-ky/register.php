<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/userModel/UserModel.php";

$username = $_REQUEST["username"] ?? "u";
$password = $_REQUEST["password"] ?? "";

$userModel = new UserModel();

$result = $userModel->Register($username, $password);

if ($result) {
    echo '<script>
                location.href = "../../view/trang-dang-nhap";
            </script>
            ;';
}
else{
    echo '<script>
                alert("Có lỗi xảy ra");
                history.back();
            </script>
            ;';
}