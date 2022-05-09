<?php 
    $db = new DataBase();
    if(!Cookie::check("user-name") && !Cookie::check("user-id")){
        header("Location: ../../../site/view/trang-dang-nhap");
    }else{
        $cu = Cookie::get("user-name");
        $ci = Cookie::get("user-id"); 
        $query = "SELECT *
        FROM user
        WHERE `username` = '$cu'
        AND `ID` = '$ci'";
        if($db->num($query) == 0){
            header("Location: ../../../site/view/trang-dang-nhap");
        }else {
            $sql = $db->send($query);
            $row = $sql->fetch_assoc();
            if($row['type'] == 1){
                header("Location: ../../../site/view/trang-dang-nhap");
            }
        }
    }
?>