<?php
    include "../pageComponent/header.php";
    include "../pageComponent/cookie.php"
?>
    <header></header>
    <body class="container-md">
        <h1>Quản lý tài khoản</h1>
        <form class="container container-form" id="container-form" method="POST" >
            
            <ul class="nav nav-pills nav-fill action-nav">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Lọc theo
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id='catelst'>
                            <li><a class="dropdown-item" onclick="changeType('all')">Tất cả</a></li>
                            <li><a class="dropdown-item" onclick="changeType(0)">Admin</a></li>
                            <li><a class="dropdown-item" onclick="changeType(1)">User</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <select class="form-control w-25" name="action" id="limitlist">
                        <option value="7">Hiện 7</option>
                        <option value="14">Hiện 14</option>
                        <option value="21">Hiện 21</option>
                    </select>
                </li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
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
<div class="modal fade" id="update-permission-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cấp quyền quản trị</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#" method="post">
                <p>Bạn chắc chứ?</p>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id='btn-update-account' class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
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