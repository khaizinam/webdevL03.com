<?php
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    include "../../controller/trang-chi-tiet/detail_controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../public/css/productpage.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header class="header_promo d-flex flex-wrap align-items-center">
        <div class="container-sm d-flex flex-wrap align-items-center justify-content-between">
            <p class="header_promo_text text-white">SHOP BÁN HÀNG</p>
            <p class="header_promo_text text-white">LẬP TRÌNH WEB</p>
        </div>
    </header>
    <div class="product_body">
        <div class="row product_body_inner">
            <div class="col-lg-8 col-xs-12 col-sm-12 col-md-12 product_image">
                <div class="product_image_wrapper">
                    <nav aria-label="breadcrumb" class="breadcrumb_products">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb_product text-black">Trở lại</a></li>
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb_product text-black">Trang chủ</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><?php echo $res['cate']?></li>
                        </ol>
                      </nav>
                    <div class="product_image_details d-flex flex-wrap align-items-center justify-content-center">
                        <img src="<?php echo $res['img']?>" class="product_image_inner" alt="img">
                    </div>
                </div>
                <div class="product_image_info">
                    <div class="container">
                        <h2>THÔNG SỐ</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <p class="product_detail"><?php echo $res['detail']?></p>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <h2>XẾP HẠNG & ĐÁNH GIÁ</h2>
                        <h6>3 Reviews</h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12">
                            <div class="rating ms-lg-4 d-flex align-items-center justify-content-center">
                                <?php for($i=0; $i < $res['star']; $i++) { ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php }?>
                                <?php for($i=0; $i < 5-$res['star']; $i++) { ?>
                                    <i class="bi bi-star"></i>
                                <?php }?>
                                <p class="rating_score"><?php echo $res['star']?>.0</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xs-12 col-sm-12 col-md-12">
                            <?php foreach($comments as $key => $value) {?>
                                
                                <div class="comment">
                                <p class="comment_title">
                                    <?php echo $value['username']?>
                                </p>
                                <div class="comment_rating">
                                    <?php for($i=0; $i < $value['star']; $i++) { ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php }?>
                                    <?php for($i=0; $i < 5-$value['star']; $i++) { ?>
                                        <i class="bi bi-star"></i>
                                    <?php }?>
                                </div>
                                <div class="comment_content">
                                    <?php echo $value['content']?>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12 product_info">
                <div class="container sticky-top">
                    <div class="product_info_pre_header">
                        <span class="product_info_title"><?php echo $res['name']?></span>
                        <p class="product_info_price"><?php echo $res['price']?></p>
                        <p class="product_info_details">Số lượng trong kho: <?php echo $res['amount']?></b>
                        <p class="product_info_details"><b>No returns, no refunds</b><br>
                        Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ trường hợp pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và khuyến mãi nào. Giới hạn số lượng 1 sản phẩm trên mỗi đơn hàng.</p>
                    </div>
                    <button class="product_info_button">THÊM VÀO GIỎ HÀNG <i class="bi bi-arrow-right"></i></button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>