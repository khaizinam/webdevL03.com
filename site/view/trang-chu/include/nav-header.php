<div id="header">
        <div id="header-1" class="d-flex">
            <div id="header-1-left">
                <span>BKStore</span>
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
                <style>
                    .btn-blank {
                        background-color: Transparent;
                        background-repeat: no-repeat;
                        border: none;
                    }
                    .icon-standard{
                        margin-top: 8px;
                        margin-right: 20px;
                        position: relative;
                        width: 50px;
                        height: 50px;
                        font-size: 30px;
                        color: grey;
                        border-radius: 50%;
                        overflow: hidden;
                    }
                    .icon-standard:hover{
                        color: black;
                    }
                    .icon-standard i,.icon-standard img{
                        position: absolute;
                        top: 4px;
                        left: 10px;
                    }
                    .icon-standard img{
                        width: 35px;
                        height: 35px;
                        top: 7.5px;
                        left: 7.5px;
                    }
                </style>
                    <div>
                        <button onclick="location.href='../trang-ca-nhan/'" class="btn-blank icon-standard log"><i class="bi bi-person-circle"></i></button>
                        <button onclick="location.href='../trang-thanh-toan/'" class="btn-blank icon-standard log"><i class="bi bi-cart"></i></button>
                        <button onclick="openSlide()" class="btn-blank icon-standard" id=""><i class="bi bi-list"></i></button>
                    </div>
            </div>
        </div>
        <div class="mobile-menu">
                <div style="width:100%;min-width:350px;" class="d-flex justify-content-between" >
                        <button class="btn-blank icon-standard"><img src="../../../public/img/favicon.png" alt="logo"></button>
                        <div>
                            <button onclick="location.href='../trang-ca-nhan/'" class="btn-blank icon-standard log"><i class="bi bi-person-circle"></i></button>
                            <button onclick="location.href='../trang-thanh-toan/'" class="btn-blank icon-standard log"><i class="bi bi-cart"></i></button>
                            <button onclick="openSlide()" class="btn-blank icon-standard" id=""><i class="bi bi-list"></i></button>
                        </div>
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
            <a class="menu-101 admin-page" href="../../../admin/view/trang-quanly/index.php">Quản lí</a>
            <a class="menu-101 log" href="../trang-thanh-toan/index.php">Giỏ hàng</a>
            <button class="menu-101" data-bs-toggle="collapse" data-bs-target="#collapse-danh-muc-san-pham" aria-expanded="false" aria-controls="collapseExample">Danh mục sản phẩm</i></button>
            <div class="collapse" id="collapse-danh-muc-san-pham">
                <ul id="show-list-categories" class="list-slide-menu">
                </ul>
            </div>
            
            <a class="menu-101 no-log" href="../trang-dang-nhap/index.php">Đăng nhập</a>
            <a class="menu-101 no-log" href="../trang-dang-ky/index.php">Đăng kí</a>
            <a class="menu-101 log" href="../trang-ca-nhan/index.php">Tài khoản</a>
            <a class="menu-101 log" href="../../../system/lib/logout.php">Đăng Xuất</a>
        <!-- end slide body -->
        </div>
    </div>