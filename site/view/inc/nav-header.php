<style>
.btn-blank {
    background-color: Transparent;
    background-repeat: no-repeat;
    border: none;
}

#header {
    min-height: 0;
}

#header-2-top {
    display: flex;
    height: auto;
    width: 100%;
    justify-content: space-between;
    padding: 0 20px;
    margin: 0 auto;
}

.icon-standard {
    width: 60px;
    font-size: 30px;
    color: grey;
    border-radius: 50%;
}

.icon-standard img {
    width: 100%;
}

.icon-standard:hover {
    color: black;
}

@media only screen and (max-width: 768px) {
    .mobile-menu {
        height: auto;
    }
}
</style>
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
        <div id="header-2-top">
            <button onclick="location.href='../trang-chu/'" class="btn-blank icon-standard">
                <img src="../../../public/img/favicon.png" alt="logo">
            </button>
            <div class="d-flex align-center">
                <button onclick="location.href='../trang-ca-nhan/'" class="btn-blank icon-standard log">
                    <i class="bi bi-person-circle"></i>
                </button>
                <button onclick="location.href='../trang-thanh-toan/'" class="btn-blank icon-standard log">
                    <i class="bi bi-cart"></i>
                </button>
                <button onclick="openSlide()" class="btn-blank icon-standard log">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div id="header-2-top">
            <button onclick="location.href='../trang-chu/'" class="btn-blank icon-standard">
                <img src="../../../public/img/favicon.png" alt="logo">
            </button>
            <div class="d-flex align-center">
                <button onclick="location.href='../trang-ca-nhan/'" class="btn-blank icon-standard log">
                    <i class="bi bi-person-circle"></i>
                </button>
                <button onclick="location.href='../trang-thanh-toan/'" class="btn-blank icon-standard log">
                    <i class="bi bi-cart"></i>
                </button>
                <button onclick="openSlide()" class="btn-blank icon-standard" id="">
                    <i class="bi bi-list"></i>
                </button>
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
        <a class="menu-101" href="../trang-chu/">Trang chủ</a>
        <a class="menu-101 admin-page" href="../../../admin/view/trang-quanly/index.php">Quản lí</a>
        <a class="menu-101 log" href="../trang-thanh-toan/index.php">Giỏ hàng</a>
        <button class="menu-101" data-bs-toggle="collapse" data-bs-target="#collapse-danh-muc-san-pham"
            aria-expanded="false" aria-controls="collapseExample">Danh mục sản phẩm</i></button>
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