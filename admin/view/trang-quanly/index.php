<?php
    $url = "../../controller/";
    include "include/header.php";
    
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
                        <select class="form-control select-all-option col" name="action" required>
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
                                <li><a class="dropdown-item" href="?cate=all">Tất cả</a></li>
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
            <button type="button" id='deleteProductBtn' class="btn btn-danger">Xác nhận</button>
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

<script src="./include/checkboxRender.js"></script>
<script>

    var productDatas = {};
    var productType = {};
    var productID;
    var productCount;
    var page = 1;
    var cate = 'all';
    var limit = 7;
    var productChecks;

    $.ajax({//display cate list
        url: `../../model/processForm/getProductCate.php`,
        success: function (data) {
            data = JSON.parse(data);
            var htmlcate = '';
            var selectlst = '';
            for(let cate of data) {
                htmlcate += `<li><a class="dropdown-item" href="?cate=${cate.cate}">${cate.name}</a></li>`;
                selectlst += `<option value="${cate.cate}">${cate.name}</option>`;
                productType[cate.cate] = cate.name;
            }
            $('#seclect-type').html(selectlst);
            $('#updateType').html(selectlst);
            $('#catelst').append(htmlcate);
        }
    })

    function changePage(p) {
        page = p;
        $.ajax({ //display table data limit
            url: `../../model/processForm/displayproduct.php?page=${page}&cate=${cate}&limit=${limit}`,
            success: function (data) {
                data = JSON.parse(data);
                productDatas={};
                for(let product of data['data']) {
                    productDatas[product.id] = product;
                }
                displayProductlist(productDatas);
            }
        });
        paging();
    }

    function paging() {
        var pagehtml = '';
        if(page > 1){
            pagehtml+=`
                <li class="page-item">
                    <a class='page-link' onclick="changePage(${page - 1})" aria-label='Previous'>
                    <span aria-hidden="true">&laquo;</span></a>
                </li>
            `
        }

        for(var i = 1; i <= Math.ceil(productCount/limit); i++) {
            if(i == page){
                pagehtml += `<li class="page-item active"><a class="page-link" >${i}</a></li>`;
            }
            else pagehtml += `<li class='page-item'><a class='page-link' onclick="changePage(${i})">${i}</a></li>`
        }

        if(page < Math.ceil(productCount/limit)){
            pagehtml+=`
                <li class="page-item">
                    <a class='page-link' onclick="changePage(${page + 1})" aria-label='Next'>
                    <span aria-hidden="true">&raquo;</span></a>
                </li>
            `
        }
        $('.pagination').html(pagehtml);
    }

    if(!productCount){//first time render page
        $.ajax({
            url: './include/productCount.php',
            success: function (data){
                productCount = data;
                console.log(productCount);
                paging();
            }
        })
    }

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
        if (tbhtml != '') $('tbody').html(tbhtml);
        else $('tbody').html('No product found');
                
    }
    
    $('#limitlist').change(function (){
        limit = $(this).val();
        $.ajax({ //display table data limit
            url: `../../model/processForm/displayproduct.php?page=${page}&cate=${cate}&limit=${limit}`,
            success: function (data) {
                data = JSON.parse(data);
                productDatas={};
                for(let product of data['data']) {
                    productDatas[product.id] = product;
                }
                cate = data['cate'];
                page = data['page'];
                limit = data['limit'];
                displayProductlist(productDatas);
                paging();
            }
        })
    })

    if(jQuery.isEmptyObject(productDatas)){// first time render page
        $.ajax({ //display table data
            url: `../../model/processForm/displayproduct.php?page=${page}&cate=${cate}&limit=${limit}`,
            success: function (data) {
                data = JSON.parse(data);
                // console.log(data);
                cate = data['cate'];
                page = data['page'];
                limit = data['limit'];

                for(let product of data['data']) {
                    productDatas[product.id] = product;
                }
                displayProductlist(productDatas);
            }
        })
    }
    
    $('#delete-product-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        productID = button.data('id');
    });

    $('#deleteProductBtn').click( function (){ 
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

    $("#btn-add-cate").click(function(){
        const name = $('#add-cate-input').val();
        const normalname = name.normalize('NFD').replace(/[\u0300-\u036f ]/g, '').toLowerCase();
        $.post('../../model/processForm/addCate.php',{catename: name,cate: normalname})
            .done((data)=>{
                console.log(data);
                $('#add-cate-modal').modal('hide');
                $('#catelst').append(`<li><a class="dropdown-item" href="?cate=${normalname}">${name}</a></li>`);
            })
    })

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

    $('#rewrite-product-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        productID = button.data('id');
        $('#updateName').val(productDatas[productID].name);
        $('#updatePrice').val(productDatas[productID].price);
        $('#updateType').val(productDatas[productID].cate);
        $('#updateDetail').val(productDatas[productID].detail);
    })

    $('#updateProductBtn').click(function(){
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
                    productDatas[productID]
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
    });
</script>