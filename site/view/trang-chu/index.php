<?php
    include "./include/header.php";
?>
    <input type="hidden" id="cate-https" value="<?php echo $cate;?>">
    <input type="hidden" id="page-https" value="<?php echo $page;?>">
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
        <div id="menu-direct" class="container">
        </div>
    <div id="slide-menu">
        <div id="slide-menu-header">
            <button onclick="closeSlide()" id="btn-close-slide-menu"><i class="bi bi-x-lg"></i></button>
        </div>
        <!-- start slide body -->
        <div id="slide-menu-body" class="container">
            <a class="menu-101" href="index.php">Trang chủ</a>
            <a class="menu-101 log" href="../trang-thanh-toan/index.php">Giỏ hàng</a>
            <button class="menu-101" data-bs-toggle="collapse" data-bs-target="#collapse-danh-muc-san-pham" aria-expanded="false" aria-controls="collapseExample">Danh mục sản phẩm <i class="bi bi-caret-down-fill"></i></button>
            <div class="collapse" id="collapse-danh-muc-san-pham">
                <ul id="show-list-categories" class="list-slide-menu">
                </ul>
            </div>
            
            <a class="menu-101 no-log" href="../trang-dang-nhap/index.php">Đăng nhập</a>
            <a class="menu-101 no-log" href="../trang-dang-ki/index.php">Đăng kí</a>
            <a class="menu-101 log" href="../trang-ca-nhan/index.php">Tài khoản</a>
            <a class="menu-101 log" href="../../../system/lib/logout.php">Đăng Xuất</a>
        <!-- end slide body -->
        </div>
    </div>
    <div id="all-page" class="container">
            <div class="component-wrapper-1">
                <h3 id="h3-1" class="center"></h3> 
            </div> 
            <!-- PRODUCT SHOW -->
            <div class="wrapper-product-list">
            <?php  
                include "../../model/productPage/product-list.php";
            ?>
            </div>
            <!-- END product show -->
        </div>
    </div>
    <div style="background-color: white;min-height:50px;margin-bottom:20px" id="pagination" class="container">
        <?php 
          include "./include/pagination.php";
        ?>
    </div>

<!-- Footer -->
<?php include "./include/footer.php"; ?>