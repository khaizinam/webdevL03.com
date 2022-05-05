<!-- Show list product in trang-chu site, -->
<!-- have GET['cate'] -->
<!-- Nguyen Huu Khai 4/5/22  -->

<div class="wrapper-product-list">
    <?php 
        $query = "SELECT * FROM product ORDER BY ID DESC";
        if(isset($_GET['cate'])){
            if($_GET['cate'] != "all"){
                $cate = $_GET['cate'];
                $query = "SELECT * 
                FROM product 
                WHERE `cate` = '$cate'
                ORDER BY ID DESC";
            }
        }
        $sql = $db->send($query);
        while($rows = $sql->fetch_array()){
            $productID = $rows['ID'];
            $linkToDetailPage = '../detail/index.php?view="'.$productID;
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
                <a href="<?php echo $linkToDetail?>">
                    <div class="img-product-wrapper">
                        <div class="img-background">
                            <img src="../../../public/img/1.jpg" alt="product">    
                        </div>
                        <div class="img-product">  
                            <img  src="../../../public/img/shoe.jpg" alt="product"> 
                        </div>
                    </div>
                    <div class="content-product">
                        <!-- show name product -->
                        <div class="detail-product">
                            <span><?php echo $productName;?></span>
                        </div>

                        <div class="danh-gia">
                            <span>đã bán :</span><span>150</span>
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
</div>

