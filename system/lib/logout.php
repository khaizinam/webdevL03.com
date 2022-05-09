<?php
include "./conn.php";
Cookie::delete("user-name");
Cookie::delete("user-id");
Cookie::set("check-login","false");
header("Location: ../../site/view/trang-dang-nhap");
?>