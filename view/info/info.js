var user_id = 2;

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
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        var info = JSON.parse(this.responseText);
        console.log(info);
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
                        <input type="text" id="address" value="`+info.address+`">
                    </div>
                    <div class="line">
                        <div class="title"></div>
                        <input type="submit" value="Cập nhật" class="btn btn-update">
                        <input type="reset" value="Khôi phục" class="btn btn-reset">
                    </div>
        `;
    };
    xhttp.open("POST","controller/get_user.php?id="+user_id);
    xhttp.send();
}

function update_info(){
    var fullname = document.getElementById('fullname').value;
    var phone_number = document.getElementById('phone_number').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        alert(this.responseText);
        load_info();
    };
    xhttp.open("POST","controller/update_info.php?id="+user_id);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("fullname="+fullname+"&phone_number="+phone_number+"&email="+email+"&address="+address);
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
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.responseText=="Đã đổi mật khẩu!"){
                old_pass.value="";
                new_pass.value="";
                confirm.value="";
            }
            alert(this.responseText);
        };
        xhttp.open("POST","controller/change_pass.php?id="+user_id);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("old_pass="+old_pass.value+"&new_pass="+new_pass.value);
    }
    
    return false;
}

function load_transaction(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        var transaction = JSON.parse(this.responseText);
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
        document.getElementById('transaction-list').innerHTML = txt;
    };
    xhttp.open("GET","controller/get_transaction.php?user_id="+user_id);
    xhttp.send();
}

load_transaction();
load_info();