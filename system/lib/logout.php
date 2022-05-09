<?php
include "./conn.php";
Cookie::delete("user-name");
Cookie::delete("user-id");
header("Location: ../../site/view/trang-dang-nhap");
?>