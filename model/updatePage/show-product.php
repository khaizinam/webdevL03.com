<?php 
    $query = "SELECT * FROM product ORDER BY ID DESC";
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT product.ID,product.name,product.img,product.star,product.price 
            FROM product,cate 
            WHERE product.ID = cate.productID 
            AND cate.cate ='$cate'
            ORDER BY ID DESC";
        }
    }
    $sql = $db->send($query);
    while($rows = $sql->fetch_array()){?>
        <div class="wrapper-product">
            <a href="<?php echo '../detail/index.php?view="'.$rows['ID']?>">
                <div class="img-product">
                    <img src="../../<?php echo $rows['img']; ?>" alt="product">
                </div>
                <div class="content-product">
                    <div class="detail-product">
                        <span><?php echo $rows['name'];?></span>
                    </div>
                    <div class="danh-gia">
                        <span>đã bán :</span><span>150</span>
                    </div>
                    <div class="price">
                        <span><?php echo $rows['price'];?></span>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>

