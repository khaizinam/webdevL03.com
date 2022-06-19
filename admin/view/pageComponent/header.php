<?php 
    clearstatcache();
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../system/bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="../../../system/bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="../../../system/lib/ajax.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../public/css/manager.css">
    
    <link rel="icon" type="image/x-icon" href="../../../public/img/favicon.png">
    <title>BKStore</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
             <a class="navbar-brand" href="../../../site/view/trang-chu"><!--thêm ảnh vào đây -->BKStore</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../trang-quanly">Quản lý sản phẩm</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../quanlytk">Quản lý tài khoản</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" id="search-bar" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" id="search-btn" type="button">Search</button>
            </form>
            </div>
        </div>
    </nav>
    </header>