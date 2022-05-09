var user_id = $("#user-id").val();

function str_money(money){
    str = money + "";
    var txt = "";
    var n = str.length;
    while (n>3){
        txt = '.' + str.slice(n-3,n) + txt;
        n = n-3;
    }
    txt = str.slice(0,n) + txt;
    return txt;
}

function show_content(n){
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove('active');
    }
    tabcontent[n].classList.add('active');

    litab = document.querySelectorAll(".nav li");
    for (i = 0; i < litab.length; i++) {
        litab[i].classList.remove('li-active');
    }
    litab[n].classList.add('li-active');
}


function load_info(){
    $.post("../../controller/trang-ca-nhan/get_user.php?id="+user_id,
    {},
    function(data){
        if (data==""){
            document.getElementById('info').innerHTML = "<h2 style='text-align: center'>Tài khoản không tồn tại</h2>";
            document.getElementById('change_pass').innerHTML = "<h2 style='text-align: center'>Tài khoản không tồn tại</h2>";
            document.getElementById('transaction').innerHTML = "<h2 style='text-align: center'>Tài khoản không tồn tại</h2>";
            return;
        }
        var info = JSON.parse(data);
        if (info.type==1){
            document.getElementById('usertitle-type').innerHTML = "Member";
        }
        else{
            document.getElementById('usertitle-type').innerHTML = "Admin";
        }
        document.getElementById('usertitle-name').innerHTML = info.username;
        
        document.getElementById('info').innerHTML = 
        `
        <h2>CẬP NHẬT THÔNG TIN</h2>
                    <div class="line">
                        <div class="title">Tên</div>
                        <input type="text" id="fullname" placeholder="Chưa có" value="`+info.fullname+`" required>
                    </div>
                    <div class="line">
                        <div class="title">SĐT</div>
                        <input type="tel" id="phone_number" placeholder=" " value="`+info.phone_number+`" required>
                    </div>
                    <div class="line">
                        <div class="title">Email</div>
                        <input type="email" id="email" placeholder="example@gmail.com" value="`+info.email+`" required>
                    </div>
                    <div class="line">
                        <div class="title">Địa chỉ</div>
                        <textarea id="address" rows=2>`+info.address+`</textarea>
                    </div>
                    <div class="line">
                        <div class="title"></div>
                        <div class="btn-group">
                            <input type="submit" value="Cập nhật" class="btn btn-update">
                            <input type="reset" value="Khôi phục" class="btn btn-reset">
                        </div>
                    </div>
        `;
    }
    );
}

function update_info(){
    var fullname = document.getElementById('fullname').value;
    var phone_number = document.getElementById('phone_number').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    
    $.post("../../controller/trang-ca-nhan/update_info.php?id="+user_id,
        {
            fullname: fullname,
            phone_number: phone_number,
            email: email,
            address: address
        },
        function(data){
            alert(data);
            load_info();
        }
    );
    return false;
}

function change_pass(){
    var old_pass = document.getElementById('old_pass');
    var new_pass = document.getElementById('new_pass');
    var confirm = document.getElementById('confirm');

    if (new_pass.value != confirm.value){
        alert('Mật khẩu nhập lại không trùng');
    }
    else{
        $.post(
            "../../controller/trang-ca-nhan/change_pass.php?id="+user_id,
            {
                old_pass: old_pass.value,
                new_pass: new_pass.value,
                confirm: confirm.value
            },
            function(data){
                // 1: Co loi xay ra
                // 2: Mat khau cu khong dung
                // 3: Doi mat khau thanh cong
                if (data=="3"){
                    old_pass.value="";
                    new_pass.value="";
                    confirm.value="";
                    alert("Đổi mật khẩu thành công!");
                }
                if (data=="1"){
                    alert("Có lỗi xảy ra!");
                }
                else if (data=="2"){
                    alert("Mật khẩu cũ không đúng!");
                }
            }
        );
    }
    
    return false;
}

function load_transaction(){
    $.post(
        "../../controller/trang-ca-nhan/get_transaction.php?user_id="+user_id,
        {},
        function(data){
            var transaction = JSON.parse(data);
            var txt = "";
            var stt = 0;
            transaction.forEach(item => {
                stt += 1;
                txt += `
                <tr title="Time: `+item.time+`">
                                <td>`+stt+`</td>
                                <td>`+item.product_name+`</td>
                                <td>`+item.quantity+`</td>
                                <td>`+str_money(parseInt(item.price)*parseInt(item.quantity))+`</td>
                            </tr>`;
            });
            $('#transaction-list').html(txt);
        }
    );
}

load_transaction();
load_info();