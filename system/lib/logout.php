<?php

setcookie("user-name", $row["username"], time() - (86400), "/");
setcookie("user-id", $row["ID"], time() - (86400), "/");

header("Location: ../../site/view/trang-dang-nhap");
?>