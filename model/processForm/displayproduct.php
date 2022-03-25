<?php
      $query = "SELECT * FROM product ORDER BY ID DESC";
      if(isset($_GET['cate'])){
          if($_GET['cate'] != "all"){
              $cate = $_GET['cate'];
              $query = "SELECT product.ID,product.name,product.img,product.price,product.amount
              FROM product,cate 
              WHERE product.ID = cate.productID 
              AND cate.cate ='$cate'
              ORDER BY ID DESC";
          }
      }
      $sql = $db->send($query);
      while($rows = $sql->fetch_array()){?>
          <tr>
              <td>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="object[]" value="1" >
                  </div>
              </td>
              <td class="text-center"><?php echo $rows['ID']?></td>
              <td class="text-center"><?php echo $rows['name']?></td>
              <td class="text-center">Giày</td>
              <td class="text-center"> <?php echo $rows['price']?> </td>
              <td class="text-center" ><?php echo $rows['amount']?></td>
              <td class="text-center">
                  <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="<?php echo $rows['ID']?>" data-bs-target="#rewrite-product-modal">Sửa</a>
                  <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="<?php  echo $rows['ID']?>" data-bs-target="#delete-product-modal">Xóa</a>
              </td>
          </tr>
          
      <?php }
?>