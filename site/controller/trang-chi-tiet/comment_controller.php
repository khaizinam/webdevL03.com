<?php
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    include "../../model/detailModel/DetailModel.php"; 
    $BASE_URL = 'localhost:8080/webl03';
    $detailmodel = new DetailModel();
    
    // echo $_POST['userid'];
    if (isset($_POST['userid'])) {
        $detailmodel->addComment($_POST['userid'], $_POST['productid'], $_POST['content']);
        echo $detailmodel->getLatestComment();
    }


    if (isset($_POST['deleteid'])) {
        $id = $_POST['deleteid'];
        $detailmodel->deleteComment($id);
    }

    if (isset($_POST['editid'])) {
        $id = $_POST['editid'];
        $content = $_POST['content'];
        $detailmodel->editComment($id, $content);
        echo $detailmodel->getCommentbyID($id);
    }
    

    