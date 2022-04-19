<?php
    $url = "../../controller/";
    include "include/header.php";
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
                        <th scope="col" class="text-center" colspan="3">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //include "./include/displayproduct.php"; ?> 
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
                    <input type="file" class="form-control" id="updateImages" name='image'>
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

<script>
    document.addEventListener('DOMContentLoaded',function(){
        var productDatas;
        var productID;
        var page = <?php echo $page; ?>;
        var cate = "<?php echo $cate; ?>";
        var deleteForm = document.getElementById('delete-product-form'); 
        var btnDeleteProduct = document.getElementById('btn-delete-product');
        var productChecks = $('input[name="objectIDs[]"]');
        var checkboxAll = $('#checkbox-all');
        var checkSubmitButton = $('.btn-check-submit');

        function displayProductlist(productdatas){
            var tbhtml = '';
            for(let prop of productdatas){
                    tbhtml +=`<tr id="${prop.id}">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="objectIDs[]" value="${prop.id}" >
                            </div>
                        </td>
                        <td class="text-center">${prop.id}</td>
                        <td class="text-center" id="name${prop.id}">${prop.name}</td>
                        <td class="text-center" id="cate${prop.id}">${productType[prop.cate]}</td>
                        <td class="text-center" id="price${prop.id}">${prop.price} </td>
                        <td class="text-center" id="amount${prop.id}">${prop.amount}</td>
                        <td class="text-center" id="detail${prop.id}" hidden>${prop.detail}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${prop.id}" data-bs-target="#rewrite-product-modal">Sửa</a>
                            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${prop.id}" data-bs-target="#delete-product-modal"><i class="bi bi-x-circle"></i></a>
                            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${prop.id}" data-bs-target="#add-amount-product-modal"><i class="bi bi-plus-circle"></i></a>
                        </td>
                    </tr>`
                }
                // console.log(tbhtml);
                $('tbody').html(tbhtml);
        }
        $.ajax({
            // url: '../../model/updatePage/show-product.php',
            url: `./include/displayproduct.php?page=${page}&cate=${cate}`,
            success: function (data) {
                productDatas = JSON.parse(data);
                displayProductlist(productDatas);    
                
            }
        })
        const productType={
            'Áo' : 'ao',
            'Quần': 'quan',
            'Giày': 'giay',
            'ao' : 'Áo',
            'quan': 'Quần',
            'giay': 'Giày'
        }
        $('#delete-product-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            productID = button.data('id');
        });

        btnDeleteProduct.onclick = function (){ 
            $.ajax({url: `../../model/processForm/deleteproduct.php?id=${productID}`,
                success: function(result){
                    location.reload();
                }
            });
        };

        $('#add-amount-product-modal').on('show.bs.modal', function (event){
            var button = $(event.relatedTarget); 
            productID = button.data('id');
            const name = $(`#name${productID}`).text();
            $('#add-amount-product-modal-title').text(`Thêm số lượng sản phẩm cho ${name}`);
        })

        $('#btn-update-amount').click(function() {
            if($('#update-amount-value').val() > 0) {
                $('#add-amount-product-modal').modal('hide');
                var updamount = parseInt($(`#amount${productID}`).text()) + parseInt($('#update-amount-value').val());
                $(`#amount${productID}`).text(updamount);
                $('#update-amount-value').val('')
                $.post(`../../model/processForm/updatePdAm.php?id=${productID}`,{amount: updamount})
                    .done((data)=>{
                        console.log(data);
                    })
            }
            else{
                alert('input require');
            }
        })

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
            var product;
            for(let pd of productDatas){
                if(pd.id == productID){
                    product = pd;
                    break;
                }
            }
            // const name = $(`#name${productID}`).html();
            // const type = productType[$(`#cate${productID}`).html()];
            // const price = parseInt($(`#price${productID}`).html());
            // const detail = $(`#detail${productID}`).html();
            $('#updateName').val(product.name);
            $('#updatePrice').val(product.price);
            $('#updateType').val(product.cate);
            $('#updateDetail').val(product.detail);
        })

        $('#updateProduct').click(function(){
            let myForm = document.getElementById('update-form');
            let formData = new FormData(myForm);
            $.ajax({
                url:`../../model/processForm/updateproduct.php?id=${productID}`,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                success: function(data){
                    if(data == 'update successfully'){
                        $('#rewrite-product-modal').modal('hide');
                        $(`#name${productID}`).text($('#updateName').val());
                        $(`#cate${productID}`).text(productType[$('#updateType').val()]);
                        $(`#price${productID}`).text($('#updatePrice').val());
                        $(`#detail${productID}`).text($('#updateDetail').val());
                        $('#updateImages').val('')
                    }
                    else {
                        alert(data);
                    }
                }
            })
        })

  });
</script>