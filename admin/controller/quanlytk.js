var accountDatas = {};
var accountType = {
    1 : 'Admin',
    0 : 'Khách hàng',
};
var accountID;
var accountCount;
var page = 1;
var type = 'all';
var limit = 7;
var search = '';

function requestAccountDatas(){
    $.ajax({ //display table data limit
        url: `../../model/account/getUserlist.php?page=${page}&type=${type}&limit=${limit}&search=${search}`,
        success: function (data) {
            data = JSON.parse(data);
            productDatas={};
            for(let product of data['data']) {
                productDatas[product.id] = product;
            }
            cate = data['type'];
            page = data['page'];
            limit = data['limit'];
            displayAccountlist(productDatas);
            paging();
        }
    })
}

function changePage(p) {
    page = p;
    requestAccountDatas();
}

function changeType(t) {
    type = t;
    requestAccountDatas();
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

    for(var i = 1; i <= Math.ceil(accountCount/limit); i++) {
        if(i == page){
            pagehtml += `<li class="page-item active"><a class="page-link" >${i}</a></li>`;
        }
        else pagehtml += `<li class='page-item'><a class='page-link' onclick="changePage(${i})">${i}</a></li>`
    }

    if(page < Math.ceil(accountCount/limit)){
        pagehtml+=`
            <li class="page-item">
                <a class='page-link' onclick="changePage(${page + 1})" aria-label='Next'>
                <span aria-hidden="true">&raquo;</span></a>
            </li>
        `
    }
    $('.pagination').html(pagehtml);
}

if(!accountCount){//first time render page
    $.ajax({
        url: `../../model/account/getUserCount.php?type=${type}`,
        success: function (data){
            accountCount = data;
            requestAccountDatas();
            paging();
        }
    })
}

function displayAccountlist(accountdatas){
    var tbhtml = '';
    for(const id in accountdatas){
        tbhtml =`<tr id="${accountdatas[id].id}">
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" onchange="checkboxCheck()" name="objectIDs[]" value="${accountdatas[id].id}" >
                </div>
            </td>
            <td class="text-center">${accountdatas[id].id}</td>
            <td class="text-center" id="name${accountdatas[id].id}">${accountdatas[id].name}</td>
            <td class="text-center" id="type${accountdatas[id].id}">${accountType[accountdatas[id].type]}</td>
            <td class="text-center" id="phonenum${accountdatas[id].id}">${accountdatas[id].pnum} </td>
            <td class="text-center" id="address${accountdatas[id].id}">${accountdatas[id].address}</td>
            <td class="text-center" id="email${accountdatas[id].id}">${accountdatas[id].email}</td>
            <td class="text-center">
                <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-id="${accountdatas[id].id}" data-bs-target="#delete-account-modal"><i class="bi bi-x-circle"></i></a>
            </td>
        </tr>` + tbhtml;
    }
        // console.log(tbhtml);
    if (tbhtml != '') $('tbody').html(tbhtml);
    else $('tbody').html('No product found');
            
}

$('#search-btn').click(()=> {
    search = $('#search-bar').val();
    console.log("search");
    requestAccountDatas();
})

$('#limitlist').change(function (){
    limit = $(this).val();
    requestAccountDatas();
})

$('#delete-account-modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    accountID = button.data('id');
});

$('#btn-delete-account').click( function (){ 
    $.ajax({url: `../../model/account/deleteUser.php?id=${accountID}`,
        success: function(result){
            $('#delete-account-modal').modal('hide');
            requestAccountDatas();
        }
    });
});

$('#muti-action-button').click( function (){ 
    var objectIDs = [];
    for(let obj of $('input[name="objectIDs[]"]:checked')){
       objectIDs.push(obj.value);
    }
    action = $('#select-action').val();
    $.post('../../model/account/multiaction.php',{action: action, objectIDs: objectIDs})
        .done((data) => {
            if(data =='action success'){
                if(action == 'delete'){
                    accountCount -= objectIDs.length;
                }
                requestAccountDatas();
            }else{
                alert(data);
            }
        })
})