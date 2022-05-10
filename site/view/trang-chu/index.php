<?php
    include "./include/header.php";
?>
    <input type="hidden" id="cate-https" value="<?php echo $cate;?>">
    <input type="hidden" id="page-https" value="<?php echo $page;?>">
    <?php include "./include/nav-header.php";?>
    <div id="all-page" class="container">
            <div class="component-wrapper-1">
                <h3 id="h3-1" class="center"></h3> 
            </div> 
            <!-- PRODUCT SHOW -->
            <div id="wrapper-product-list">
            </div>
            <!-- END product show -->
        </div>
    </div>
    <div style="background-color: white;min-height:50px;margin-bottom:20px" id="pagination" class="container">
        <?php 
          include "./include/pagination.php";
        ?>
    </div>

<!-- Footer -->
<?php include "./include/footer.php"; ?>