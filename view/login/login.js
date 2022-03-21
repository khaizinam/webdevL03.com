function check_login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    if (str.length == 0) {
        document.getElementById("txt").innerHTML = "";
        return;
    } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            if (password != this.responseText) {
                document.getElementById("txt").innerHTML = "Mật khẩu không đúng";
            } else {
                document.getElementById("txt").innerHTML = "Mật khẩu chính xác";
            }
        }
        xmlhttp.open("GET", "../../model/user/check_login.php?username=" + str);
        xmlhttp.send();
    }

    fetch("../../model/user/check_login.php?username=" + username)
        .then(res => res.json())
        .then(data => {
            var password = document.getElementById('password').value;
            var e = document.querySelectorAll('.form-control');
            if (data == 'false') {
                e[0].classList.add('error');
                e[1].childNodes[3].innerHTML = 'Tài khoản không tồn tại';
                return false;
            } else {
                e[0].classList.remove('error');
                if (data.password != password) {
                    e[1].classList.add('error');
                    e[1].childNodes[3].innerHTML = 'Mật khẩu không đúng!';
                    return false;
                } else {
                    e[1].classList.remove('error');
                    e[1].childNodes[3].innerHTML = 'Mật khẩu chính xác';
                    return true;
                }
            }
        })
}