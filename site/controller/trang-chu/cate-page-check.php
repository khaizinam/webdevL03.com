<?php 
//Validate server request, check cate & page to right form.
//Nguyen Huu khai
//07/05/2022
$page = 1;
$cate = "all";
if(!isset($_GET['page']) || !isset($_GET['cate'])){
    if(isset($_GET['page'])) $page = $_GET['page'];
    if(isset($_GET['cate'])) $cate = $_GET['cate'];
    header("Location: index.php?cate=$cate&page=$page"); 
}else{
    $page = $_GET['page'];
    $cate = $_GET['cate'];
}

    $query_get_num = "SELECT * FROM product";
    $numProduct = $db->num($query_get_num);
   
        $limit = 20; //LIMIT PRODUCT ON PAGE
        $totalPage = ceil($numProduct / $limit);
        // validate PAGE;
        if($_GET['page'] > $totalPage){
            $page = $totalPage;
            header("Location: index.php?cate=$cate&page=$page");
        } 
        if($_GET['page'] <= 0){
            $page = 1;
            header("Location: index.php?cate=$cate&page=$page");
        } 
        //end validate
        // validate CATE;
        if($cate != "all"){
            $query_num_cate = "SELECT * FROM cate WHERE `href` = '$cate'";
            $numCate = $db->num($query_num_cate);
            if($numCate == 0){
                header("Location: index.php?cate=all&page=$page");
            }
        } 
        //end validate
        $start = 0;
        $end = 0;
        if($totalPage <= 4){
            $start = 1;
            $end = $totalPage;
        }else{
            if($page <= 3){
                $start = 1;
                $end = 5;
            }else {
                $start = $page - 2;
                if($page + 1 <= $totalPage){
                    if($page + 2 <= $totalPage){
                        $start = $page - 2;
                        $end = $page + 2;
                    }else{
                        $start = $page - 3;
                        $end = $page + 1;
                    }
                }else{
                    $start = $page - 4;
                    $end = $page;
                }
            }
        }  
?>