<?php
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    $db = new DataBase();
    include "../../controller/trang-chu/cate-page-check.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../system/bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="../../../system/bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <script src="../../../system/lib/ajax.js"></script>
    <link rel="icon" type="image/x-icon" href="../../../public/img/favicon.png">
    <title>BKStore</title>
</head>

<body>
    <input type="hidden" id="cate-https" value="<?php echo $cate;?>">
    <input type="hidden" id="page-https" value="<?php echo $page;?>">
    <?php include "./include/nav-header.php";?>
    <div id="all-page" class="container">
            <div class="component-wrapper-1">
                <h3 id="h3-1" class="center"></h3> 
            </div> 
            <!-- PRODUCT SHOW -->
            <div id="wrapper-product-list">
            </div>
            <!-- END product show -->
        </div>
    </div>
    <div style="background-color: white;min-height:50px;margin-bottom:20px" id="pagination" class="container">
    <?php if($numProduct > $limit){ ?>
        <ul>
        <?php for ($i = $start; $i <= $end; $i++) { 
                if($i == $page){
                    ?><li> <a class="pagination-show pagin-active" href="index.php?cate=<?php echo $cate?>&page=<?php echo $i;?>"><?php echo $i;?></a></li><?php
                }else{
                    ?><li> <a class="pagination-show" href="index.php?cate=<?php echo $cate?>&page=<?php echo $i;?>"><?php echo $i;?></a></li><?php
                }
            }?>
        </ul>
    <?php } ?>
    </div>

<!-- Footer -->
<div id="wr-footer">
        <div class="footer container d-flex">
            <div class="about-us">
                <h5>Moderm Team</h5>
                <style>
                    
                </style>
                <ul style="list-style: none">
                    <li>Nguy???n H???u Kh???i : T???ng h???p , trang ch???</li>
                    <li>Ph???m H???ng Kh??nh : Gi??? h??ng, Th??ng tin c?? nh??n, Trang ????ng nh???p, ????ng k??</li>
                    <li>H?? Vi???t Ho??ng : Trang admin</li>
                    <li>Tr???n Minh T??n : Trang chi ti???t s???n ph???m</li>
                </ul>
            </div>
            <div class="contact">
                <h5>Link git</h5>
                <a style="font-size:40px" href="https://github.com/khaizinam/webdevL03.com" target="_blank" ><i class="bi bi-github"></i></a>
            </div>
        </div>
        <span>khaizinam ??</span>
        <span>Bootrap 5.1.3 -</span>
        <span>Jquery -</span>
        <span>mySQL - </span>
        <span>May 2022</span>
    </div>
    <script src="<?php echo auto_version('../../../public/js/BaseClass.js');?>"></script>
    <script src="<?php echo auto_version('../../../public/js/productPage.js');?>"></script>
    <script>
        for (var link of document.querySelectorAll("link[rel=stylesheet]")) link.href = link.href.replace(/\?.*|$/, "?" + Date.now())
    </script>
</body>

</html>