<?php
    $root2 = "../../";  
    $url = $root2."controller/";
    include "include/header.php";
    include $root2."config/config.php";
    include $root2."model/header/conn.php";
    $db = new DataBase();
    include "./include/checkCookie.php";
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
            <div id="header-2-top" class="d-flex">
                <?php if(!isset($_COOKIE['user-id'])){
                   ?><a id="user" href="../login/">Đăng nhập</a><?php
                }else{
                    ?><a id="user" href="../info/">Tài khoản</a>
                    <a id="" href="../login/login.html?action=logout">Đăng xuất</a><?php
                }?>
                
            </div>
            <div id="header-2-bottom" class="d-flex">
                <div class="logo">
                    <a href="index.php?cate=all"> <img src="<?php echo  $url?>assets/img/trang-chu/logo.png" alt="logo" style="width:80px"></a>
                </div>
                <div id="main-menu-2-bottom" class="d-flex">
                    <button onclick="btnDrop(1);" id="hover-1" class="bold">MENU</button>
                </div>
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
            </div>
        </div>
        <div class="mobile-menu">
            <div class="logo">
                <a href="index.php?cate=all"> <img src="<?php echo  $url?>assets/img/trang-chu/logo.png" alt="logo" style="width:80px"></a>
            </div>
        </div>
    </div>
    <div id="drop-down" class="component-wrapper-112">
        <div id="inner-1" class="component-wrapper-113 container d-flex">

        </div>
    </div>
    <?php
     if(isset($_GET['cate'])){
        if($_GET['cate'] == 'all' ){
            include "include/poster.php";
        }
     }else include "include/poster.php";
    ?>
    <div id="all-page" class="container">
        <?php
        if(isset($_GET['cate'])){
            if($_GET['cate'] == 'all' ){
                include "include/title.php";
            }
        }else include "include/title.php";
        ?>
        <div class="wrapper-product-list">
            <?php  
                include $root2."model/updatePage/show-product.php";
            ?>
        </div>
    </div>
    <div id="wr-footer">
        <div class="footer container d-flex">
            <div class="about-us">
                <h5>Về chúng tôi</h5>
                <style>
                    
                </style>
                <ul style="list-style: none">
                    <li>Nguyễn Hữu Khải</li>
                    <li>Phạm Hồng Khánh</li>
                    <li>Hà Việt Hoàng</li>
                    <li>Trần Minh Tân</li>
                </ul>
            </div>
            <div class="contact">
                <h5>Thông tin liên hệ</h5>
                <a style="font-size:40px" href="https://github.com/khaizinam/webdevL03.com" target="_blank" ><i class="bi bi-github"></i></a>
                <a style="font-size:40px" href="https://github.com/khaizinam/webdevL03.com" target="_blank" >  <i class="bi bi-facebook"></i></a>
              
            </div>
        </div>
    </div>
    <script>
    </script>
    <script src="<?php echo  $url?>assets/js/trang-chu-3.js"></script>
    <script src="<?php echo  $url?>assets/js/trang-chu-2.js"></script>
</body>

</html>