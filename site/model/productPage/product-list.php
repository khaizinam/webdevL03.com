<!-- Show list product in trang-chu site, -->
<!-- have GET['cate'] -->
<!-- Nguyen Huu Khai 4/5/22  -->
    <?php 
        $getstart = ($page - 1) * $limit;
        $query = "SELECT * FROM product  LIMIT $getstart,$limit";
        if(isset($_GET['cate'])){
            if($_GET['cate'] != "all"){
                $cate = $_GET['cate'];
                $query = "SELECT * 
                FROM product 
                WHERE `cate` = '$cate'
                LIMIT $getstart,$limit";
            }else {
                $query = "SELECT * FROM product LIMIT $getstart,$limit";
            }
        }
        $sql = $db->send($query);
        while($rows = $sql->fetch_array()){
            $productID = $rows['ID'];
            $linkToDetailPage = '../detail/index.php?view='.$productID;
            $imgLink = '../../../'.$rows['img'];
            $productName = $rows['name'];
            if(strlen($productName) >= 73){
                $productName = substr($productName,0,70);
                $productName = $productName."...";
            }
            $productPrice = $rows['price'].' VNĐ';
            /*--- HTML SHOW  LIST PRODUCT----*/
            ?>
            <div class="wrapper-product">
                <a href="<?php echo $linkToDetailPage?>">
                    <div class="img-product-wrapper">
                        <div class="img-background">
                            <img src="../../../public/img/bg-product.jpg" alt="product">    
                        </div>
                        <div class="img-product">  
                            <img  src="<?php echo $imgLink ?>" alt="product"> 
                        </div>
                    </div>
                    <div class="content-product">
                        <!-- show name product -->
                        <div class="detail-product">
                            <span><?php echo $productName;?></span>
                        </div>
                        <!-- price -->
                        <div class="price">
                            <span><?php echo $productPrice;?></span>
                        </div>
                    </div>
                </a>
            </div>
    <?php 
            /*--- END HTML ----*/
    } ?>

