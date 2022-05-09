<?php
    //include "../../model/detailModel/DetailModel.php"; 
    $detailmodel = new DetailModel();
    if (isset($_GET['view'])) {
        $res = $detailmodel->getDetail($_GET['view']);
        $res = json_decode($res, true);
        $comments = $detailmodel->getComments($_GET['view'], 1);
        // print($comments);
        $comments = json_decode($comments, true);
    }
    else header("Location: ".$BASE_URL);
?>