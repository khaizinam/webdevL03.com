<?php
    $page = 0;
    if(isset($_GET['page'])) $page = ($_GET['page'] -1 )* 7;
    $limit = $page + 7;
    $query = "SELECT product.ID,product.name,product.img,cate.cate,product.price,product.amount
            FROM product 
            LEFT JOIN cate 
            ON product.ID = cate.productID
            ORDER BY ID ASC              
            LIMIT $page,$limit";
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT product.ID,product.name,product.img,cate.cate,product.price,product.amount
            FROM product,cate 
            WHERE product.ID = cate.productID 
            AND cate.cate ='$cate'
            ORDER BY ID DESC";
        }
    }
    $sql = $db->send($query);
    while($rows = $sql->fetch_array()){?>
        <tr id="<?php echo $rows['ID']?>">
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="object[]" value="1" >
                </div>
            </td>
            <td class="text-center"><?php echo $rows['ID']?></td>
            <td class="text-center"><?php echo $rows['name']?></td>
            <td class="text-center"><?php echo $rows['cate']?></td>
            <td class="text-center"> <?php echo $rows['price']?> </td>
            <td class="text-center" ><?php echo $rows['amount']?></td>
            <td class="text-center">
                <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="<?php echo $rows['ID']?>" data-bs-target="#rewrite-product-modal">Sửa</a>
                <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="<?php  echo $rows['ID']?>" data-bs-target="#delete-product-modal">Xóa</a>
            </td>
        </tr>
        
    <?php }
?>