<?php
    $url = "../../controller/";
    include_once '../header/header.php';
    include "../../config/config.php";
    include "../../model/header/conn.php";
    $db = new DataBase();
    $data =array();
    $query = "SELECT * FROM product ORDER BY ID DESC";
    $url_img = "../../controller/assets/img/product_details/";
    if(isset($_GET['view'])){
            $detailId = $_GET['view'];
            $query = "SELECT product.ID,product.name,product.img,product.star,product.price,product.detail,cate.cate
            FROM product,cate 
            WHERE product.ID = cate.productID 
            AND product.ID ='$detailId'"; 
    }
    $sql = $db->send($query);
    while($rows = $sql->fetch_array()){
        array_push($data, array('id' => $rows['ID'],
        "url" => "../detail/index.php?view=".$rows['ID'],
        "img" => $rows['img'].".jpg",
        "c" => $rows['name'],
        "sold" => $rows['ID'],
        "star" => $rows['star'],
        "detail" => $rows['detail'],
        "cate" => $rows['cate'],
        "cost" =>$rows['price'] ));
    }
    // print_r($data);
    // $json = json_encode($data);
    // echo $json;
?>
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
                          <li class="breadcrumb-item"><a href="<?php echo 'http://localhost:8080/webl03/view/trang-chu/'?>" class="breadcrumb_product text-black">Trang chủ</a></li>
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb_product text-black"><?php echo $data[0]['cate']?></a></li>
                          <li class="breadcrumb-item active" aria-current="page">Giày</li>
                        </ol>
                      </nav>
                    <div class="product_image_details d-flex flex-wrap align-items-center justify-content-center">
                        <img src="<?php echo $url_img.$data[0]['img']?>" class="product_image_inner" alt="img">
                    </div>
                </div>
                <div class="product_image_info">
                    <div class="container">
                        <h2>CHI TIẾT SẢN PHẨM</h2>
                    </div>
                    <div class="detail">
                        <?php echo $data[0]['detail'] ?>
                    </div>

                    <div class="container mt-5">
                        <h2>XẾP HẠNG & ĐÁNH GIÁ</h2>
                        <h6>3 Reviews</h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12">
                            <div class="rating ms-lg-4 d-flex align-items-center justify-content-center">
                                <?php
                                    for ($i = 0; $i < $data[0]['star']; $i++) {
                                        echo '<i class="bi bi-star-fill"></i>';
                                    }

                                    for ($i = 0; $i < 5-$data[0]['star']; $i++) {
                                        echo '<i class="bi bi-star"></i>';
                                    }
                                ?>
                                <p class="rating_score"><?php echo number_format($data[0]['star'],1,'.','.')?></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xs-12 col-sm-12 col-md-12">
                            <div class="comment">
                                <p class="comment_title">
                                    Tran Van A
                                </p>
                                <div class="comment_rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <div class="comment_content">
                                    The hole the shoe laces go through failed and ripped open after wearing them 3 times
                                </div>
                            </div>
                            <div class="comment">
                                <p class="comment_title">
                                    Nguyen Minh S
                                </p>
                                <div class="comment_rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <div class="comment_content">
                                    The hole the shoe laces go through failed and ripped open after wearing them 3 times
                                </div>
                            </div>
                            <div class="comment">
                                <p class="comment_title">
                                    Ho Vu T
                                </p>
                                <div class="comment_rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <div class="comment_content">
                                    The hole the shoe laces go through failed and ripped open after wearing them 3 times
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12 product_info">
                <div class="container sticky-top">
                    <div class="product_info_pre_header">
                        <p><?php echo $data[0]['cate']?>.Orginials</p>
                        <span class="product_info_title"><?php echo $data[0]['c']?></span>
                        <p class="product_info_price"><?php echo number_format($data[0]['cost'],0,'.',',')?>đ</p>
                        <p class="product_info_details"><b>No returns, no refunds</b><br>
                        Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ trường hợp pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và khuyến mãi nào. Giới hạn số lượng 1 sản phẩm trên mỗi đơn hàng.</p>
                    </div>
                    <button class="product_info_button">THÊM VÀO GIỎ HÀNG <i class="bi bi-arrow-right"></i></button>
                </div>

            </div>
        </div>
    </div>
    <div id="wr-footer">
        <div class="footer container d-flex">
            <div class="about-us">
                <h5>Về chúng tôi</h5>
            </div>
            <div class="contact">
                <h5>Thông tin liên hệ</h5>
            </div>
        </div>
    </div>
</body>

</html>