<?php
    include "../model/conn.php";
    $db = new DataBase();
if(isset($_GET["logout"])){
    unset($_COOKIE['user-name']); 
    unset($_COOKIE['user-id']); 
    setcookie("user-name", "", time() - 3600, "/");
    setcookie("user-id", "", time() - 3600, "/");
}
if(!isset($_COOKIE["user-name"]) && !isset($_COOKIE["user-id"])){
    if(isset($_POST["name"]) && isset($_POST["pass"])){
        $username = $_POST["name"];
        $pass = $_POST["pass"];
        $query = "SELECT user_id AS id ,user_name as 'name'
        FROM users
        WHERE user_name='$username'
        AND user_password = '$pass'
        LIMIT 1";
        if($db->num($query) == 0){
            //
        }else {
            $sql = $db->send($query);
            $row = $sql->fetch_assoc();
            setcookie("user-name", $row["name"], time() + (86400 * 7), "/");
            setcookie("user-id", $row["id"], time() + (86400 * 7), "/");
            header("Location: dashboard.php");
        }
    } 
}else {
        $username = $_COOKIE["user-name"];
        $id = $_COOKIE["user-id"];
        $query = "SELECT user_id AS id ,user_name as 'name'
        FROM users
        WHERE user_name='$username'
        AND user_id = '$id'
        LIMIT 1";
        if($db->num($query) == 0){
            unset($_COOKIE['user-name']); 
            unset($_COOKIE['user-id']); 
            setcookie("user-name", "", time() - 3600, "/");
            setcookie("user-id", "", time() - 3600, "/");
        }else {
            header("Location: dashboard.php");
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/main.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <script src="../asset/js/jquery.min.js"></script>
    <title>SmartGaden</title>
</head>

<body>
    <div class="container">
        <form action="login.php" method="post" id="form-login">
            <h1 style="text-align: center; color: skyblue;">SMART GARDEN</h1>
            <h2 style="text-align: center;">Đăng nhập</h2>
            <div class="mb-3">
                <label for="user-name" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="name" id="user-name" placeholder="Mời nhập">
                <br><label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="pass" id="password">
            </div>
            <div class="justify-content-between d-flex">
                <a href="signin.php">Chưa có tài khoản ?</a>
                <input type="submit" class="btn btn-primary" value="Đăng nhập">
            </div>
        </form>
    </div>
    <script src="../asset/js/app.js"></script>
</body>

</html>