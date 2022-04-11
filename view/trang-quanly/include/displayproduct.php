<?php
    $page = 1;
    $paging = 0;
    if(isset($_GET['page'])) $page = $_GET['page'];
    $paging = ($page-1)* 7;
    $limit = $paging + 7;
    $query = "SELECT product.ID,product.name,product.img,cate.cate,product.price,product.amount,product.detail
            FROM product 
            LEFT JOIN cate 
            ON product.ID = cate.productID
            ORDER BY ID ASC              
            LIMIT $paging,$limit";
    if(isset($_GET['cate'])){
        if($_GET['cate'] != "all"){
            $cate = $_GET['cate'];
            $query = "SELECT product.ID,product.name,product.img,cate.cate,product.price,product.amount,product.detail
            FROM product,cate 
            WHERE product.ID = cate.productID 
            AND cate.cate ='$cate'
            ORDER BY ID DESC
            LIMIT $paging,$limit";
        }
    }
    $sql = $db->send($query);
    while($rows = $sql->fetch_array()){?>
        <tr>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="objectIDs[]" value="<?php echo $rows['ID']?>" >
                </div>
            </td>
            <td class="text-center"><?php echo $rows['ID']?></td>
            <td class="text-center" id="name<?php echo $rows['ID'] ?>"><?php echo $rows['name']?></td>
            <td class="text-center" id="cate<?php echo $rows['ID'] ?>"><?php
                 if($rows['cate'] == 'ao') echo 'Áo';
                 if($rows['cate'] == 'giay') echo 'Giày';
                 if($rows['cate'] == 'quan') echo 'Quần';
            ?></td>
            <td class="text-center" id="price<?php echo $rows['ID'] ?>"> <?php echo $rows['price']?> </td>
            <td class="text-center" id="amount<?php echo $rows['ID'] ?>"><?php echo $rows['amount']?></td>
            <td class="text-center" id="detail<?php echo $rows['ID'] ?>" hidden><?php echo $rows['detail']?></td>
            <td class="text-center">
                <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="<?php echo $rows['ID']?>" data-bs-target="#rewrite-product-modal">Sửa</a>
                <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="<?php  echo $rows['ID']?>" data-bs-target="#delete-product-modal">Xóa</a>
            </td>
        </tr>
        
    <?php }
?>