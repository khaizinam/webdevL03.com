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
        <div class="container">
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
                        <button class="btn btn-outline-primary col">Thực hiện</button>
                    </div>
                </div>
                <div class="col ">
                    <div class="row">
                        <div class="dropdown d-flex justify-content-center col">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Lọc theo
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Áo</a></li>
                            <li><a class="dropdown-item" href="#">Quần</a></li>
                            <li><a class="dropdown-item" href="#">Giày</a></li>
                            </ul>
                            
                        </div>
                        <button class="btn btn-outline-primary d-flex justify-content-center col" data-bs-toggle="modal" data-bs-target="#add-product">Thêm sản phẩm</button>
                    </div>
                    
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
                <?php include "../../model/processForm/displayproduct.php"; ?> 
            </tbody>
        </table>
    </body>
    <footer class="bottom ">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
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
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="ADILETTE COMFORT">
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Loại</label>
                    <select class="form-control form-control-sm" name="type">
                        <option value="giay">Giày</option>
                        <option value="ao">Áo</option>
                        <option value="quan">Quần</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice" class="form-label">Giá thành</label>
                    <input type="Number" class="form-control" id="exampleInputPrice" value="850000">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImages" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="exampleInputImages">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Xác nhận</button>
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
            <button type="submit" onSubmit="submitDeleteform()" class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>
<script>
    var id 
    
    function deleteProduct() {
        var form = document.getElementById("delete-product-form")
        var action = '../../model/processForm/deleteproduct.php?id=' + id +
        form.setAttribute("action",action);
    }
</script>