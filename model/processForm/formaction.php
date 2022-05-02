<?php
    include "../../config/config.php";
    include "../header/conn.php";
    $db = new DataBase();
    $key = $_POST['objectIDs'];
    $action = $_POST['action'];
    $idlist = implode(',',$key);

    if($action == 'delete'){
        $sql = "DELETE FROM product WHERE ID in ($idlist)";
        $result = $db->send($sql);
<<<<<<< HEAD
    }   
    $result = $db->send($sql);
    if ($result){
        echo 'action success';
=======
        $sql = "DELETE FROM cate WHERE productID in ($idlist)";
        $result = $db->send($sql);
    }
    
    $result = $db->send($sql);
    if ($result){
        echo '<script>
                location.href = "../../view/trang-quanly/index.php";
            </script>
            ;';
>>>>>>> khanh
    }
    
?>