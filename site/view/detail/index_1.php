<?php include "./inc/header.php";?>
    <header class="header_promo d-flex flex-wrap align-items-center">
        <div class="container-sm d-flex flex-wrap align-items-center justify-content-between">
            <p class="header_promo_text text-white">BKStore</p>
            <p class="header_promo_text text-white">Modern Team</p>
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
<?php include "./inc/footer.php" ?>
