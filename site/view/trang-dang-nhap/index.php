
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/96c87f9550.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../../public/img/favicon.png">
    <title>Login Page</title>
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>

<body>
    <form action="../../controller/trang-dang-nhap/login.php" method="post" class="login-container" autocomplete="off">
        <h1>Đăng nhập</h1>
        <div class="form-control">
            <input name="username" id="username" type="text" placeholder="Username" required>
            <span></span>
        </div>

        <div class="form-control error">
            <input name="password" id="password" type="password" placeholder="Password" required>
            <small id="txt">&nbsp;</small>
            <span></span>
        </div>

        <button type="submit" class="btn-submit">Login</button>
        <div class="signup-link">
            Chưa có tài khoản? <a href="../trang-dang-ky/">Đăng ký ngay</a>
        </div>
        <div id="icons">
            <a class="icon-item" style="color: red;"><i class="fa-brands fa-google"></i></a>
            <a class="icon-item" style="color: rgb(72,107,163);"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="icon-item" style="color: DodgerBlue;"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </form>
</body>

</html>