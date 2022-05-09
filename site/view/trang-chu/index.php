<?php
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    $db = new DataBase();
    //$cookie = new Cookie();
    include "./include/cookie.php";
    include "./include/header.php";
    include "../../controller/trang-chu/header-mainpage.php";
    
?>

    <div id="header">
        <div id="header-1" class="d-flex">
            <div id="header-1-left">
                <span>ME Shop</span>
            </div>
            <div id="header-1-right">
                <span>Moderm TEAM</span>
            </div>
        </div>
        <div id="header-2">
            <!-- LOGIN BAR -->
            <div id="header-2-top" class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.php?cate=all"> <img src="../../../public/img/favicon.png" alt="logo" style="width:60px"></a>
                </div>
                 <!-- search bar -->
                    <div id="search-wrapper">
                        <div id="form-search">
                            <input id="q" type="text" placeholder="Tìm kiếm" name="q">
                        </div>
                        <div id="search-result" class="search-auto-complete">
                            <span>Mời nhập!</span>
                        </div>
                        <div id="clear-search">
                            <button><i class="bi bi-x-lg"></i></button>
                        </div>
                    </div>  
                <!-- end search -->
                <div id="user-area">
                    aaa
                </div>
                <div>
                    <button onclick="openSlide()" id="btn-menu-slide"><i class="bi bi-list"></i></button>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="logo">
                <a href="index.php?cate=all"> <img src="../../../public/img/favicon.png" alt="logo" style="width:40px"></a>
            </div>
            <div>
                <button onclick="openSlide()" id="btn-menu-slide"><i class="bi bi-list"></i></button>
            </div>
        </div>
    </div>
    <?php
        if($cate != "all"){
            $query_cate = "SELECT * FROM cate WHERE `href` = '$cate'";
            $sql_cate = $db->send($query_cate);
            $row_cate = $sql_cate->fetch_assoc();
        ?>
            <div id="menu-direct" class="container">
            <a href="index.php?cate=all&page=1">Trang chủ</a>
            <span>></span>
            <span><?php echo $row_cate['name'];?></span>
        </div>
    <?php
        }
    ?>
    <div id="slide-menu">
        <div id="slide-menu-header">
            <button onclick="closeSlide()" id="btn-close-slide-menu"><i class="bi bi-x-lg"></i></button>
        </div>
        <!-- start slide body -->
        <div id="slide-menu-body" class="container">
            <a class="menu-101" href="index.php">Trang chủ</a>
            <a class="menu-101" href="index.php">Giỏ hàng</a>
            <button class="menu-101" data-bs-toggle="collapse" data-bs-target="#collapse-danh-muc-san-pham" aria-expanded="false" aria-controls="collapseExample">Danh mục sản phẩm <i class="bi bi-caret-down-fill"></i></button>
            <div class="collapse" id="collapse-danh-muc-san-pham">
                <ul class="list-slide-menu">
                    <li><a href="index.php?cate=ao">ÁO</a> </li>
                </ul>
            </div>
            <a class="menu-101" href="index.php">Đăng nhập</a>
            <a class="menu-101" href="index.php">Tài khoản</a>
        <!-- end slide body -->
        </div>
    </div>
    <div id="all-page" class="container">

            <?php
             include "include/title.php";
            ?>
        
            <!-- PRODUCT SHOW -->
            <div class="wrapper-product-list">
            <?php  
                include "../../model/productPage/product-list.php";
            ?>
            </div>
            <!-- END product show -->
        </div>
    </div>
    <style>
        #pagination{
            text-align: end;
        }
        #pagination ul{
            list-style: none;
            display: flex;
            justify-content: end;
        }
        a.pagination-show{
            font-weight: 500;
            display: block;
            width: 27px;
            height: 27px;
            line-height: 28px;
            text-align: center;
            font-size: 14px;
            border-radius: 50%;
            background-color: none;
            color: black;
            margin: 0px 5px;
        }
        a.pagin-active{
            background-color: rgb(24, 158, 255);
            color: rgb(255, 255, 255);
        }
    </style>
    <div style="background-color: white;min-height:50px;margin-bottom:20px" id="pagination" class="container">
        <?php 
          include "./include/pagination.php";
        ?>
    </div>

<!-- Footer -->
<?php include "./include/footer.php"; ?>