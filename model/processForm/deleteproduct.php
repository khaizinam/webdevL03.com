<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $key = $_GET['id'];
    $sql = "DELETE FROM product WHERE ID='$key'";
    $result = $db->send($sql);
    $sql = "DELETE FROM cate WHERE productID='$key'";
    $result = $db->send($sql);
    if ($result){
        echo '<script>
                location.href = "../../view/trang-quanly/index.php";
            </script>
            ;';
    }
?>