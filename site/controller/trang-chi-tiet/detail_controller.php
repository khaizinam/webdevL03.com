<?php
    include "../../model/detailModel/DetailModel.php"; 
    $BASE_URL = 'localhost:8080/webl03';
    $detailmodel = new DetailModel();
    if (isset($_GET['view'])) {
        $res = $detailmodel->getDetail($_GET['view']);
        $res = json_decode($res, true);
        $comments = $detailmodel->getComments($_GET['view'], 1);
        // print($comments);
        $comments = json_decode($comments, true);
    }
    else header("Location: ".$BASE_URL);
    // print_r($res);
    // print_r($comments);

    

    