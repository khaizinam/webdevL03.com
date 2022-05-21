<?php
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    include "../../../system/lib/checkCookie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/96c87f9550.js" crossorigin="anonymous"></script>
    <link href="../../../system/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../../../system/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../public/css/info.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <script src="../../../system/lib/ajax.js"></script>
    <link rel="icon" type="image/x-icon" href="../../../public/img/favicon.png">

    <title>BKStore</title>

</head>

<body>
    <style>
    .mobile-menu .logo img {
        position: absolute;
        top: 12px;
        left: 30px;
        border-radius: 50%;
    }
    </style>
    <?php include "../inc/nav-header.php";?>
    <script src="../../../public/js/nav-bar.js"></script>
    <div id="body">
        <div id="sidebar">
            <div id="basis-info">
                <div class="image">
                    <img src="../../../public/img/user.jpg" alt="Avatar">
                </div>
                <div class="usertitle">
                    <div class="usertitle-name" id="usertitle-name">
                        Anonymous
                    </div>
                    <span class="usertitle-type">
                        <i id="usertitle-type">Member</i>
                    </span>
                    <input type="text" id="user-id" value="<?=$_COOKIE['user-id'];?>" hidden>

                </div>
            </div>

            <hr>

            <div class="usermenu">
                <ul class="navmenu">
                    <li onclick="show_content(0)" class="li-active">
                        <i class="fa-solid fa-circle-info"></i>
                        Thông tin
                    </li>
                    <li onclick="show_content(1)">
                        <i class="fa-solid fa-key"></i>
                        Đổi mật khẩu
                    </li>
                    <li onclick="show_content(2)">
                        <i class="fa-solid fa-bag-shopping"></i>
                        Lịch sử mua
                    </li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="tabcontent active" id="change_info">
                <form id="info" onsubmit="return update_info();">

                </form>
            </div>

            <form class="tabcontent" id="change_pass" onsubmit="return change_pass()">
                <h2>ĐỔI MẬT KHẨU</h2>
                <div class="line">
                    <div class="title">Mật khẩu cũ:</div>
                    <input type="password" placeholder="Old Password" id="old_pass" required>
                </div>
                <div class="line">
                    <div class="title">Mật khẩu mới:</div>
                    <input type="password" placeholder="New Password" id="new_pass" required>
                </div>
                <div class="line">
                    <div class="title">Nhập lại mật khẩu:</div>
                    <input type="password" placeholder="Confirm" id="confirm" required>
                </div>
                <div class="line">
                    <input type="submit" value="Đổi" class="btn btn-change">
                </div>
            </form>

            <div class="tabcontent" id="transaction">
                <h2>LỊCH SỬ MUA</h2>
                <table>
                    <thead>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </thead>
                    <tbody id="transaction-list">
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
<script src="../../controller/trang-ca-nhan/info.js"></script>

</html>