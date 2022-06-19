<?php
    include "../../../system/lib/config.php";
    include "../../../system/lib/conn.php";
    include "../../controller/trang-chi-tiet/detail_controller.php";

    $db = new DataBase();
    if(Cookie::check("user-name") == true && Cookie::check("user-id") == true){
        $uName = Cookie::get("user-name");
        $uID = Cookie::get("user-id"); 
        $query = "SELECT *
        FROM user
        WHERE `username` = '$uName'
        AND `ID` = '$uID'";
        if($db->num($query) == 0){
            //header("Location: ../trang-chu/");
        }else {
            $sql = $db->send($query);
            $row = $sql->fetch_assoc();
            Cookie::set("user-name",$row["username"]);
            Cookie::set("user-id",$row["ID"]);
        }
    }
    if (isset($_COOKIE['user-id'])) {
        $checkid = $_COOKIE['user-id'];
        $sql = "SELECT type from user WHERE ID = '$checkid'";
        $result = $db->send($sql);
        $type = $result->fetch_assoc();
        $type = $type["type"];
    }
    // }else{
    //     header("Location: ../trang-chu/");
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../public/css/productpage.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <script src="../../../system/lib/ajax.js"></script>
    <link rel="icon" type="image/x-icon" href="../../../public/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BKStore</title>
</head>

<body>
    <?php include "../inc/nav-header.php";?>
    <script src="../../../public/js/nav-bar.js"></script>
    <div class="product_body">
        <div class="row product_body_inner">
            <div class="col-lg-8 col-xs-12 col-sm-12 col-md-12 product_image">
                <div class="product_image_wrapper">
                    <nav aria-label="breadcrumb" class="breadcrumb_products">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" onclick="history.back()"
                                    class="breadcrumb_product text-black">Trở lại</a>
                            </li>
                            <li class="breadcrumb-item"><a href="../trang-chu/"
                                    class="breadcrumb_product text-black">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="../trang-chu/index.php?cate=<?php echo $res['cate_code'];?>"
                                    class="breadcrumb_product text-black"><?php echo $res['cate'];?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $res['name'];?></li>
                        </ol>
                    </nav>
                    <div class="product_image_details d-flex flex-wrap align-items-center justify-content-center">
                        <img src="../../../<?php echo $res['img']?>" class="product_image_inner" alt="img">
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
                        <h2>BÌNH LUẬN</h2>
                    </div>
                    <div class="row comment_list">

                        <div class=" col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <?php if (!isset($_COOKIE['user-name'])) { ?>
                            <div class="mb-3">
                                <p>Vui lòng đăng nhập để bình luận</p>
                                <a href="../../view/trang-dang-nhap/index.php"><button type="button" class="btn btn-primary">Đăng nhập</button></a>
                            </div>
                            <?php } else {?>
                            <div class="mb-3">
                                <label for="comment_input" class="form-label">Viết bình luận</label>
                                <input class="form-control" id="comment_input" rows="1" onkeypress="if(event.keyCode == 13){
                                    addcomment(<?php 
                                    echo $_COOKIE['user-id']
                                    .',' .$_GET['view'] 
                                   
                                ?>,event.target.value);}"/>
                            </div>
                            <?php } ?>
                            <div class="comment_body">
                                <?php foreach($comments as $key => $value) {?>
    
                                <div class="comment" id="record<?php echo $value['ID']?>">
                                    <div class="comment_title">
                                        <?php echo $value['username']?>
                                        <?php if (isset($_COOKIE['user-name'])) { ?>
                                            <?php if ($value['author_id'] == $_COOKIE['user-id'] || $type == '0') {?>
                                                <button type="button" class="btn btnDel" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="<?php echo $value['ID']?>"><i class="fa-solid fa-trash comment-action"></i></button>
                                
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                    <div class="comment_content">
                                        <span id="comm<?php echo $value['ID']?>"><?php echo $value['content']?></span>
                                        <?php if (isset($_COOKIE['user-name'])) { ?>
                                            <?php if ($value['author_id'] == $_COOKIE['user-id']) {?>
                                                <button type="button" class="btn btnDel" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="<?php echo $value['ID']?>" data-bs-content="<?php echo $value['content']?>"><i class="fa-solid fa-pen comment-action"></i></button>
                                
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php }?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12 product_info">
                <div class="container sticky-top">
                    <div class="product_info_pre_header">
                        <span class="product_info_title"><?php echo $res['name']?></span>
                        <p class="product_info_price"><?php echo $res['price']?>$</p>
                        <p class="product_info_details">Số lượng trong kho: <?php echo $res['amount']?></b>
                        <p class="product_info_details"><b>No returns, no refunds</b><br>
                            Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền
                            trừ trường hợp pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu
                            đãi và khuyến mãi nào. Giới hạn số lượng 1 sản phẩm trên mỗi đơn hàng.</p>
                    </div>
                    <?php if ($res['amount']==0) { ?>
                        <p class="product_info_warning"><b>Hết hàng</b><br>
                    <?php }?>
                    <?php if (isset($_COOKIE['user-name']) && $res['amount']!=0 ) {
                        echo '<button onclick="addcart('
                        .$_GET['view']
                        .',\'' .$res['img'] 
                        .'\',\'' .$res['name']
                        .'\',' .$res['price']
                        .',1'
                        .')" class="product_info_button">THÊM VÀO GIỎ
                        HÀNG <i class="bi bi-arrow-right"></i></button>';
                    } ?>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Xóa bình luận</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              Bạn có chắc chắn muốn xóa bình luận không?
              <input type="hidden" value="" name="id" id="deleteid">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="deleteBtn">Xác nhận</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Chỉnh sửa bình luận</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
          <input type="hidden" value="" name="id" id="editproduct">
          <div class="mb-3">
                <input type="text" class="form-control" id="editname" name="name" value="" required>
            </div>
            <button type="button" class="btn btn-primary" id="editBtn" >Xác nhận</button>
            <button type="button" id="editclose" class="btn btn-secondary" data-bs-dismiss="modal" style="display: none">Đóng</button>
          </div>
        </div>
      </div>
  </div>
    <script src="../../controller/trang-chi-tiet/deletecomment.js" ></script>
    <script src="../../controller/trang-chi-tiet/editcomment.js" ></script>

    <script src="../../controller/trang-chi-tiet/addcart.js"></script>
    <script src="../../controller/trang-chi-tiet/addcomment.js"></script>
    <script>
        console.log("<?php print_r($res); ?>");
    </script>

</body>

</html>