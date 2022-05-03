﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="./register.css">
</head>

<body>
    <form action="controller/register.php" method="post" class="login-container" autocomplete="off" onsubmit="return Register()">
        <h1>Đăng Ký</h1>
        <div class="form-control">
            <input name="username" id="username" type="text" placeholder="Username" onkeyup="check_username(this.value)" required>
            <small id="txt"></small>
            <span></span>
        </div>

        <div class="form-control">
            <input name="password" id="password" type="password" placeholder="Password" onkeyup="check_password()" required>
            <small></small>
            <span></span>
        </div>

        <div class="form-control">
            <input id="confirm_pass" type="password" placeholder="Confirm" onkeyup="check_password()" required>
            <small></small>
            <span></span>
        </div>

        <button class="btn-submit" type="submit">Register</button>
        <div class="signup-link">
            Đã có tài khoản? <a href="../login/login.html">Đăng nhập</a>
        </div>
    </form>
    <script src="./register.js"></script>
</body>

</html>