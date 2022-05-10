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

    <link href="../../../system/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../../../system/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/96c87f9550.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../public/css/payment.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <script src="../../../system/lib/ajax.js"></script>
    <link rel="icon" type="image/x-icon" href="../../../public/img/favicon.png">
    <title>BKStore</title>


</head>

<body>
    <style>
        .logo img {
            position: absolute;
            top: 15px;
            left: 30px;
            border-radius: 50%;
            }
    </style>
    <?php include "../inc/nav-header.php";?>
    <script src="../../../public/js/nav-bar.js"></script>

    <div id="body-span">
        <div id="cart-span">
            <h1 class="title">
                GIỎ HÀNG
                <hr>
            </h1>

            <div id="cart-content">
                <div id="cart-header">
                    <div class="cart-item">
                        <div class="first center">

                        </div>
                        <div class="second center">
                            Thông tin sản phẩm
                        </div>
                        <div class="third center">
                            Thành tiền
                        </div>
                        <div class="fourth center">

                        </div>
                    </div>
                </div>

                <div id="cart">

                </div>
            </div>
        </div>

        <form id="feedback" onsubmit="return payment()">
            <div id="info-span">
                <input type="text" id="user-id" value="<?= $_COOKIE['user-id'];?>" hidden>
                <h1 class="title">
                    <i class="fa-solid fa-user"></i>
                    INFO
                </h1>
                <div id="info-line">
                    <label for="fullname">Tên</label>
                    <input id="fullname" name="fullname" type="text" placeholder="Fullname" required>
                </div>
                <div id="info-line">
                    <label for="phone_number">SĐT</label>
                    <input id="phone_number" name="phone_number" type="text" placeholder="Phone Number" required>
                </div>
                <div id="info-line">
                    <label for="address">Địa chỉ</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
            </div>
            <div id="bill-span">
                <h1 class="title">
                    <i class="fa-solid fa-money-check"></i>
                    BILL
                </h1>
                <div class="bill-line">
                    <div class="title">Tổng</div>
                    <div class="data" id="total">200.000</div>
                </div>
                <div class="bill-line">
                    <div class="title">Số lượng</div>
                    <div class="data" id="counter">3</div>
                </div>
                <div class="bill-line">
                    <div class="title">Phụ phí</div>
                    <div class="data">0</div>
                </div>
                <hr>
                <div class="bill-line">
                    <div class="title">Thành tiền</div>
                    <div class="data" id="all-bill">200.000.000</div>
                </div>
                <div class="payment-btn">
                    <button type="submit" id="payment-btn">THANH TOÁN</button>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="../../controller/trang-thanh-toan/payment.js"></script>

</html>