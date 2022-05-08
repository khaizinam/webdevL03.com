<?php
    include "../pageComponent/header.php";
?>
    <header></header>
    <body class="container-md">
        <h1>Quản lý tài khoản</h1>
        <form class="container container-form" id="container-form" method="POST" >
            
            <ul class="nav nav-pills nav-fill action-nav">
                <li class="nav-item">
                    <div class="row">
                        <div class="form-check col d-flex justify-content-center align-items-center">
                            <input class="form-check-input " type="checkbox" value="" id="checkbox-all">
                            <label class="form-check-label " for="checkbox-all">Chọn tất cả</label>
                        </div>    
                        <select class="form-control form-control-sm select-all-option col" id="select-action" name="action" required>
                            <option value="">--Hành động--</option>
                            <option value="delete">Xóa</option>
                        </select>
                        <button class="btn btn-outline-primary col btn-check-submit" type="button" id="muti-action-button" disabled>Thực hiện</button>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Lọc theo
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id='catelst'>
                            <li><a class="dropdown-item" onclick="changeType('all')">Tất cả</a></li>
                            <li><a class="dropdown-item" onclick="changeType(1)">Admin</a></li>
                            <li><a class="dropdown-item" onclick="changeType(0)">User</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-product">Thêm quản trị viên</button>
                    </div> -->
                </li>
                <li class="nav-item">
                    <select class="form-control" name="action" id="limitlist">
                        <option value="7">Hiện 7</option>
                        <option value="14">Hiện 14</option>
                        <option value="21">Hiện 21</option>
                    </select>
                </li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Chọn</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Tên</th>
                        <th scope="col" class="text-center">Quyền</th>
                        <th scope="col" class="text-center">Số điện thoại</th>
                        <th scope="col" class="text-center">Địa chỉ</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <!--data table here -->
                </tbody>
            </table>
        </form>
        </body>
        <footer class="bottom ">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">

                </ul>
            </nav>
        </footer>
    </body>
</html> 
  <!-- Modal -->
  <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="add-product" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="add-product">Thêm sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="../../model/processForm/addproduct.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="seclect-type" class="form-label">Loại</label>
                    <select class="form-control form-control-sm" name="type" id="seclect-type">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá thành</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="image" name="image">
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

<div class="modal fade" id="delete-account-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Xóa người dùng</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#" method="post">
                <p>Bạn chắc muốn xóa chứ </p>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id='btn-delete-account' class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>

<script src="../../../public/js/checkboxRender.js"></script>
<script src="../../controller/quanlytk.js"></script>