<?php 
if(!isset($_GET['page'])){
    $_GET['page'] = 1;
}
$page = $_GET['page'];
$query_get_num = "SELECT * FROM product";
    $numProduct = $db->num($query_get_num);
        $limit = 30;
        $totalPage = ceil($numProduct / $limit);
        // validate PAGE;
        if($_GET['page'] > $totalPage){
            $_GET['page'] = $totalPage;
            $page = $_GET['page'];
        } 
        if($_GET['page'] <= 0){
            $_GET['page'] = 1;
            $page = $_GET['page'];
        } 
        if(!isset($_GET['cate'])){
            $_GET['cate'] ="all";
        }
        //end validate
        $start = 0;
        $end = 0;
        if($page <= 3){
            $start = 1;
        }else {
            $start = $page - 2;
        }
        if($totalPage <= 5){
            $end = $totalPage;
        }else {
            if($page + 1 >= $totalPage){
                if($page + 2 >= $totalPage){
                    $end = $page + 2;
                }else{
                    $end = $page + 1;
                }
            }else{
                $end = $totalPage;
            }
        }
?>