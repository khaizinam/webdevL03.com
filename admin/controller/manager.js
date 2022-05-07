
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