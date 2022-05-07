<?php
    include "../pageComponent/header.php";
    $url = '../../'
    // $_COOKIE['user-name']
    // $_COOKIE['user-id']
?>
    <header></header>
    <body class="container-md">
        <h1>Quản lý sản phẩm</h1>
        <form class="container container-form" id="container-form" method="POST" >
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="form-check col d-flex justify-content-center align-items-center">
                            <input class="form-check-input " type="checkbox" value="" id="checkbox-all">
                            <label class="form-check-label " for="checkbox-all">Chọn tất cả</label>
                        </div>    
                        <select class="form-control select-all-option col" id="select-action" name="action" required>
                            <option value="">--Hành động--</option>
                            <option value="delete">Xóa</option>
                            <!-- <option value="add-recommed">Đề xuất</option>
                            <option value="remove-recommed">Hủy đề xuất</option> -->
                        </select>
                        <button class="btn btn-outline-primary col btn-check-submit" type="button" id="muti-action-button" disabled>Thực hiện</button>
                    </div>
                </div>
                <div class="col">
                    <div class="rows">
                        <div class="dropdown column">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Lọc theo
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id='catelst'>
                                <li><a class="dropdown-item" onclick="changeCate('all')">Tất cả</a></li>
                            </ul>
                        </div>
                        <div class="column">
                            <select class="form-control" name="action" id="limitlist">
                                <option value="7">Hiện 7</option>
                                <option value="14">Hiện 14</option>
                                <option value="21">Hiện 21</option>
                            </select>
                        </div>
                        <div class="column"><button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-cate-modal">Thêm loại</button></div>
                        <div class="column"><button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-product">Thêm sản phẩm</button></div>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Chọn</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Tên</th>
                        <th scope="col" class="text-center">Loại</th>
                        <th scope="col" class="text-center">Giá thành</th>
                        <th scope="col" class="text-center">Số lượng tồn kho</th>
                        <th scope="col" class="text-center" colspan="3">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <!--data table here -->
                </tbody>
            </table>
        </form>
        </body>
        <footer class="bottom">
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
            <form id="add-product-form" action="../../model/processForm/addproduct.php" method="post" enctype="multipart/form-data">
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
                <button type="button" class="btn btn-primary" id="add-product-btn">Thêm</button>
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
            <form id="update-form" action="#" method="post"  enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="updateName" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="updateName" name="name" >
                </div>
                <div class="mb-3">
                    <label for="updateType" class="form-label">Loại</label>
                    <select class="form-control form-control-sm" name="type" id="updateType">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="updatePrice" class="form-label">Giá thành</label>
                    <input type="number" class="form-control" name="price" id="updatePrice" min="0">
                </div>
                <div class="mb-3">
                    <label for="updateImages" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="updateImages" name='image'>
                </div>
                <div class="mb-3">
                    <label for="updateDetail" class="form-label">Chi tiết</label>
                    <textarea class="form-control" id="updateDetail" maxlength="10000" name="detail"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="updateProductBtn" class="btn btn-primary">Xác nhận</button>
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

<div class="modal fade" id="add-amount-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="add-amount-product-modal-title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="update-amount-value" class="form-label">Số lượng :</label>
            <input type="number" min="0" id='update-amount-value'>
        </div>
        <div class="modal-footer">
            <button type="button" id='btn-update-amount' class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="add-cate-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="add-amount-product-modal-title">Thêm loại sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="update-amount-value" class="form-label">Tên loại:</label>
            <input type="text" id='add-cate-input'>
        </div>
        <div class="modal-footer">
            <button type="button" id="btn-add-cate" class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>

<script src="<?php echo $url ?>../public/js/checkboxRender.js"></script>
<script src="<?php echo $url ?>controller/manager.js"></script>