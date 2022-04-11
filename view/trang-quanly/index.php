<?php
    $url = "../../controller/";
    include "include/header.php";
    include "../../config/config.php";
    include "../../model/header/conn.php";
    $db = new DataBase();
?>
    <header></header>
    <body class="container-md">
        <h1>Quản lý sản phẩm</h1>
        <form class="container container-form" method="POST" action="../../model/processForm/formaction.php">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="form-check col d-flex justify-content-center align-items-center">
                            <input class="form-check-input " type="checkbox" value="" id="checkbox-all">
                            <label class="form-check-label " for="checkbox-all">Chọn tất cả</label>
                        </div>    
                        <select class="form-control form-control-sm select-all-option col" name="action" required>
                            <option value="">--Hành động--</option>
                            <option value="delete">Xóa</option>
                            <option value="add-recommed">Đề xuất</option>
                            <option value="remove-recommed">Hủy đề xuất</option>
                        </select>
                        <button class="btn btn-outline-primary col btn-check-submit" disabled>Thực hiện</button>
                    </div>
                </div>
                <div class="col ">
                    <div class="row">
                        <div class="dropdown d-flex justify-content-center col">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Lọc theo
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="?cate=all">Tất cả</a></li>
                                <li><a class="dropdown-item" href="?cate=ao">Áo</a></li>
                                <li><a class="dropdown-item" href="?cate=quan">Quần</a></li>
                                <li><a class="dropdown-item" href="?cate=giay">Giày</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-outline-primary d-flex justify-content-center col" data-bs-toggle="modal" data-bs-target="#add-product">Thêm sản phẩm</button>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Chọn</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Tên</th>
                        <th scope="col" class="text-center">Loại</th>
                        <th scope="col" class="text-center">Giá thành</th>
                        <th scope="col" class="text-center">Số lượng tồn kho</th>
                        <th scope="col" class="text-center" colspan="2">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "./include/displayproduct.php"; ?> 
                </tbody>
            </table>
        </form>
        </body>
        <footer class="bottom ">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php
                        $query = "SELECT COUNT(ID)
                                FROM product
                            ";
                        if(isset($_GET['cate'])){
                            $cate = $_GET['cate'];
                            $query = "SELECT COUNT(product.ID)
                                FROM product
                                LEFT JOIN cate 
                                ON product.ID = cate.productID
                                WHERE cate.cate = '$cate'
                            ";
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
                            echo "<a class='page-link' href='?page=$prevpage' aria-label='Previous'>";
                            echo'<span aria-hidden="true">&laquo;</span></a></li>';
                        }
                        for($i = 1; $i <= ceil($productCount/7); $i++){
                            if($i == $page) echo"<li class='page-item active'><a class='page-link' href='?page=$i'>$i</a></li>";
                            else echo"<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
                        }
                        if($page < ceil($productCount/7)){ 
                            // echo"<script>console.log($page)</script>";
                            $nextpage = $page + 1;
                            echo '<li class="page-item">';
                            echo "<a class='page-link' href='?page=$nextpage' aria-label='Next'>";
                            echo'<span aria-hidden="true">&raquo;</span>
                            </a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </footer>
    </body>
</html>
<form id="delete-product-form" method="POST"></form>
  
  <!-- Modal -->
<div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="add-product" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="add-product">Thêm sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="../../model/processForm/addproduct.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Loại</label>
                    <select class="form-control form-control-sm" name="type" id="type">
                        <option value="giay">Giày</option>
                        <option value="ao">Áo</option>
                        <option value="quan">Quần</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá thành</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Chi tiết</label>
                    <textarea class="form-control" name="detail" id="detail" maxlength="10000"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="rewrite-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sửa sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="update-form" action="#" method="post">
                <div class="mb-3">
                    <label for="updateName" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="updateName" name="name" >
                </div>
                <div class="mb-3">
                    <label for="updateType" class="form-label">Loại</label>
                    <select class="form-control form-control-sm" name="type" id="updateType">
                        <option value="giay">Giày</option>
                        <option value="ao">Áo</option>
                        <option value="quan">Quần</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="updatePrice" class="form-label">Giá thành</label>
                    <input type="number" class="form-control" name="price" id="updatePrice" min="0">
                </div>
                <div class="mb-3">
                    <label for="updateImages" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="updateImages">
                </div>
                <div class="mb-3">
                    <label for="updateDetail" class="form-label">Chi tiết</label>
                    <textarea class="form-control" id="updateDetail" maxlength="10000" name="detail"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="updateProduct" class="btn btn-primary">Xác nhận</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="delete-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#" method="post">
                <p>Bạn chắc muốn xóa chứ </p>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id='btn-delete-product' class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded',function(){
        var productID;
        var deleteForm = document.getElementById('delete-product-form'); 
        var btnDeleteDish = document.getElementById('btn-delete-product');
        var productChecks = $('input[name="objectIDs[]"]');
        var checkboxAll = $('#checkbox-all');
        var checkSubmitButton = $('.btn-check-submit');

        const productType={
            'Áo' : 'ao',
            'Quần': 'quan',
            'Giày': 'giay'
        }

        $('#delete-product-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            productID = button.data('id');
        });

        btnDeleteDish.onclick = function (){ 
            deleteForm.action = '../../model/processForm/deleteproduct.php?id='+productID;
            deleteForm.submit();
        };

        checkboxAll.change(function () {
            var isCheckAll = $(this).prop('checked');
            productChecks.prop('checked',isCheckAll);
            renderSubmitButton();
        });

        productChecks.change(function(){
            var isCheckAll = productChecks.length === $('input[name="objectIDs[]"]:checked').length;
            checkboxAll.prop('checked',isCheckAll);
            renderSubmitButton();
        });

        function renderSubmitButton(){
            var checkedCount = $('input[name="objectIDs[]"]:checked').length;
            if(checkedCount > 0){
                checkSubmitButton.attr('disabled',false);//set attribute
            }
            else{
                checkSubmitButton.attr('disabled',true);
            }
        }

        $('#rewrite-product-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            productID = button.data('id');
            // console.log(productID);

            const name = $(`#name${productID}`).html();
            const type = productType[$(`#cate${productID}`).html()];
            const price = parseInt($(`#price${productID}`).html());
            const detail = $(`#detail${productID}`).html();
            // const amount = $(`#amount${productID}`).html();
            console.log($('#updatePrice'));
            $('#updateName').val(name);
            $('#updatePrice').val(price);
            $('#updateType').val(type);
            $('#updateDetail').val(detail);
        })

        $('#updateProduct').click(function(){
            $('#update-form').attr('action',`../../model/processForm/updateproduct.php?id=${productID}`)
            $('#update-form').submit();
        })

  });
</script>