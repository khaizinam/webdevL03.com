function check_password(){
    var password = document.getElementById('password').value;
    var confirm_pass = document.getElementById('confirm_pass').value;
    var e = document.querySelectorAll('.form-control');
    if (password=='' && confirm_pass==''){
        e[2].classList.remove('error');
        e[2].childNodes[3].innerHTML = '';
    }
    else if(password!=confirm_pass){
        e[2].classList.add('error');
        e[2].childNodes[3].innerHTML = 'Mật khẩu không khớp';
    }
    else{
        e[2].classList.remove('error');
        e[2].childNodes[3].innerHTML = 'Mật khẩu hợp lệ';
    }
}

function check_username(str){
    if (str.length == 0){
        document.getElementById("txt").innerHTML = "";
        return;
    }else{
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("txt").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "../../php/check_register.php?username=" + str);
        xmlhttp.send();
    }
}

function Register(){
    var e = document.querySelectorAll('.form-control');
    if (e[2].childNodes[3].innerHTML != 'Mật khẩu không khớp' && document.getElementById("txt").innerHTML == ""){
        alert("Successful!");
        window.location.href="../login/login.html";
        return true;
    }
    else {
        alert("Thất bại!");
        return false;
    }
}

