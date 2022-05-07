<?php
    $url = "../../controller/";
    include "../pageComponent/header.php";
    include "../../config/config.php";
    include "../../model/header/conn.php";
    $db = new DataBase();
    $page = 1;
    $paging = 0;
    $cate = 'all';
    if(isset($_GET['page'])) $page = $_GET['page'];
    if(isset($_GET['cate'])) $cate = $_GET['cate'];
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
                        <select class="form-control form-control-sm select-all-option col" name="action" required>
                            <option value="">--Hành động--</option>
                            <option value="delete">Xóa</option>
                            <option value="add-recommed">Đề xuất</option>
                            <option value="remove-recommed">Hủy đề xuất</option>
                        </select>
                        <button class="btn btn-outline-primary col btn-check-submit" type="button" id="muti-action-button" disabled>Thực hiện</button>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="dropdown col">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Lọc theo
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id='catelst'>
                                <li><a class="dropdown-item" href="?cate=all">Tất cả</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-outline-primary col" type="button" data-bs-toggle="modal" data-bs-target="#add-cate-modal">Thêm loại</button>
                        <button class="btn btn-outline-primary col" type="button" data-bs-toggle="modal" data-bs-target="#add-product">Thêm sản phẩm</button>
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
                        <th scope="col" class="text-center" colspan="3">Hành động</th>
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
                    <?php
                        include "./include/paging.php";
                    ?>
                </ul>
            </nav>
        </footer>
    </body>
</html> 
  <!-- Modal -->
<div class="modal fade" id="delete-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <button type="button" id='btn-delete-product' class="btn btn-danger">Xác nhận</button>
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
        </div>
      </div>
    </div>
</div>

<script src="./include/checkboxRender.js"></script>
<script>
    document.addEventListener('DOMContentLoaded',function(){
        var productDatas = {};
        var productType={};
        var productID;
        var page = <?php echo $page; ?>;
        var productChecks;
        function displayProductlist(productdatas){
            var tbhtml = '';
            for(const id in productdatas){
                    tbhtml =`<tr id="${productdatas[id].id}">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" onchange="checkboxCheck()" name="objectIDs[]" value="${productdatas[id].id}" >
                            </div>
                        </td>
                        <td class="text-center">${productdatas[id].id}</td>
                        <td class="text-center" id="name${productdatas[id].id}">${productdatas[id].name}</td>
                        <td class="text-center" id="cate${productdatas[id].id}">${productType[productdatas[id].cate]}</td>
                        <td class="text-center" id="price${productdatas[id].id}">${productdatas[id].price} </td>
                        <td class="text-center" id="amount${productdatas[id].id}">${productdatas[id].amount}</td>
                        <td class="text-center" id="detail${productdatas[id].id}" hidden>${productdatas[id].detail}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${productdatas[id].id}" data-bs-target="#rewrite-product-modal">Sửa</a>
                            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${productdatas[id].id}" data-bs-target="#delete-product-modal"><i class="bi bi-x-circle"></i></a>
                            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${productdatas[id].id}" data-bs-target="#add-amount-product-modal"><i class="bi bi-plus-circle"></i></a>
                        </td>
                    </tr>` + tbhtml;
                }
                // console.log(tbhtml);
            $('tbody').html(tbhtml);    
        }

        $.ajax({ //display table date
            url: `../../model/processForm/displayproduct.php?page=${page}&cate=${cate}`,
            success: function (data) {
                data = JSON.parse(data);
                for(let product of data) {
                    productDatas[product.id] = product;
                }
                displayProductlist(productDatas);
            }
        })
        
        $('#delete-product-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            productID = button.data('id');
        });

        $('#btn-delete-product').click( function (){ 
            $.ajax({url: `../../model/processForm/deleteproduct.php?id=${productID}`,
                success: function(result){
                    location.reload();
                }
            });
        });

        $('#muti-action-button').click( function (){ 
            let myForm = document.getElementById('container-form');
            let formData = new FormData(myForm);
            $.ajax({
                url: `../../model/processForm/formaction.php`,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                success: function(data){
                    if(data == 'action success'){
                        alert('Success');
                    }
                    else{
                        console.log(data);
                        alert('Error');
                    }
                }
            })

        })

  });
</script>