<?php
    
    $query = "SELECT COUNT(ID)
            FROM product
        ";
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT COUNT(product.ID)
                FROM product
                LEFT JOIN cate 
                ON product.ID = cate.productID
                WHERE cate.cate = '$cate'
            ";
        }
        
    }
    $sql = $db->send($query);
    $productCount = 0;
    while($rows = $sql->fetch_array()){
        $productCount = $rows[0];
    }
    if($page > 1){
        // echo"<script>console.log($page)</script>";
        $prevpage = $page - 1;
        echo '<li class="page-item">';
        echo "<a class='page-link' href='?cate=$cate&page=$prevpage' aria-label='Previous'>";
        echo'<span aria-hidden="true">&laquo;</span></a></li>';
    }
    for($i = 1; $i <= ceil($productCount/$limit); $i++){
        if($i == $page) echo"<li class='page-item active'><a class='page-link' href='?cate=$cate&page=$i&limit=$limit'>$i</a></li>";
        else echo"<li class='page-item'><a class='page-link' href='?cate=$cate&page=$i&limit=$limit'>$i</a></li>";
    }
    if($page < ceil($productCount/$limit)){ 
        // echo"<script>console.log($page)</script>";
        $nextpage = $page + 1;
        echo '<li class="page-item">';
        echo "<a class='page-link' href='?cate=$cate&page=$nextpage' aria-label='Next'>";
        echo'<span aria-hidden="true">&raquo;</span>
        </a></li>';
    }
?>