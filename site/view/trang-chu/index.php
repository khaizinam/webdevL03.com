<?php
    include "../../../system/lib/config.php";
    include "../../controller/conn.php";
    $db = new DataBase();
    include "./include/checkCookie.php";
    include "./include/header.php";
?>

    <div id="header">
        <div id="header-1" class="d-flex">
            <div id="header-1-left">
                <span>ME Shop</span>
            </div>
            <div id="header-1-right">
                <span>Moderm Evolution TEAM</span>
            </div>
        </div>
        <div id="header-2">
            <!-- LOGIN BAR -->
            <?php include "./include/login-bar.php"?>
            <!-- end login bar -->
            
            <div id="header-2-bottom" class="d-flex">
                <div class="logo">
                    <a href="index.php?cate=all"> <img src="../../../public/img/favicon.png" alt="logo" style="width:80px"></a>
                </div>
                <!-- search bar -->
                <div id="right-side-menu" class="d-flex">
                    <div id="search-wrapper">
                        <form action="" method="get" id="form-search">
                            <input id="q" type="text" placeholder="Tìm kiếm" name="q">
                        </form>
                        <div id="search-result" class="search-auto-complete">
                            <span>Mời nhập!</span>
                        </div>
                    </div>
                    <button id="cart"><i class="bi bi-cart"></i></button>
                </div>
                <!-- end search -->
            </div>
        </div>
        <div class="mobile-menu">
            <div class="logo">
                <a href="index.php?cate=all"> <img src="../../../public/img/favicon.png" alt="logo" style="width:80px"></a>
            </div>
        </div>
    </div>
    <div id="all-page" class="container">

            <?php
            if(isset($_GET['cate'])){
                if($_GET['cate'] == 'all' ){
                    include "include/title.php";
                }
            }else include "include/title.php";
            ?>
        
            <!-- PRODUCT SHOW -->
            <?php  
                include "../../model/productPage/product-list.php";
            ?>
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
    <div id="pagination" class="container">
        <ul>
            <li> <a class="pagination-show" href="index.php?page=1">1</a> </li>
            <li> <a class="pagination-show pagin-active" href="index.php?page=2">2</a> </li>
            <li> <a class="pagination-show pagin-active" href="index.php?page=3">3</a> </li>
        </ul>
    </div>

<!-- Footer -->
<?php include "./include/footer.php"; ?>