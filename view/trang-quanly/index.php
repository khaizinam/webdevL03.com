<?php
    $url = "../../public/";
    include "../header/header.php";
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
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[]" value="1" >
                        </div>
                    </td>
                    <td class="text-center">1</td>
                    <td class="text-center">ADILETTE COMFORT</td>
                    <td class="text-center">Giày</td>
                    <td class="text-center">850.000đ</td>
                    <td class="text-center" >25</td>
                    <td class="text-center">
                        <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="1" data-bs-target="#rewrite-product-modal">Sửa</a>
                        <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="1" data-bs-target="#delete-product-modal">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[]" value="2">
                        </div>
                    </td>
                    <td class="text-center">2</td>
                    <td class="text-center">ULTRABOOST 22 SHOES</td>
                    <td class="text-center">Giày</td>
                    <td class="text-center">4.400.000đ</td>
                    <td class="text-center">30</td>
                    <td class="text-center">
                        <a href="" class="btn btn-outline-primary">Sửa</a>
                        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-id="1" data-target="#delete-product-modal">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[]" value="3">
                        </div>
                    </td>
                    <td class="text-center">3</td>
                    <td class="text-center">ESSENTIALS FLEECE CAMO-PRINT HOODIE</td>
                    <td class="text-center">Áo</td>
                    <td class="text-center">660.000đ</td>
                    <td class="text-center">20</td>
                    <td class="text-center">
                        <a href="" class="btn btn-outline-primary">Sửa</a>
                        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-id="1" data-target="#delete-product-modal">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[]" value="1" >
                        </div>
                    </td>
                    <td class="text-center">4</td>
                    <td class="text-center">TIRO TRACK PANTS</td>
                    <td class="text-center">Quần</td>
                    <td class="text-center">1.200.000đ</td>
                    <td class="text-center">25</td>
                    <td class="text-center">
                        <a href="" class="btn btn-outline-primary">Sửa</a>
                        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-id="1" data-target="#delete-product-modal">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[]" value="2">
                        </div>
                    </td>
                    <td class="text-center">5</td>
                    <td class="text-center">ESSENTIALS WARM-UP 3-STRIPES TRACK JACKET</td>
                    <td class="text-center">Áo</td>
                    <td class="text-center" >1.500.000đ</td>
                    <td class="text-center">30</td>
                    <td class="text-center">
                        <a href="" class="btn btn-outline-primary">Sửa</a>
                        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-id="1" data-target="#delete-product-modal">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[]" value="3">
                        </div>
                    </td>
                    <td class="text-center">6</td>
                    <td class="text-center">CLOUDFOAM PURE 2.0 SHOES</td>
                    <td class="text-center">Giày</td>
                    <td class="text-center">1.660.000đ</td>
                    <td class="text-center">20</td>
                    <td class="text-center">
                        <a href="" class="btn btn-outline-primary">Sửa</a>
                        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-id="1" data-target="#delete-product-modal">Xóa</a>
                    </td>
                </tr>
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

  
  <!-- Modal -->
<div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Loại</label>
                    <select class="form-control form-control-sm" name="action">
                        <option value="giay">Giày</option>
                        <option value="ao">Áo</option>
                        <option value="quan">Quần</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice" class="form-label">Giá thành</label>
                    <input type="Number" class="form-control" id="exampleInputPrice">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImages" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="exampleInputImages">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Thêm</button>
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
                    <input type="text" class="form-control" id="exampleInputName" value="ADILETTE COMFORT">
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
            <button type="button" class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>
