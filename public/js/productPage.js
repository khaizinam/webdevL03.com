imgResize = () => {
    let c = document.getElementsByClassName("wrapper-product");
    let size = document.getElementsByClassName("wrapper-product-list")[0];
    console.log(size.offsetWidth);
    for (let i = 0; i < c.length; i++) {
        if (size.offsetWidth >= 768) {
            c[i].style.width = size.offsetWidth * 0.2 + "px";
            c[i].style.height = size.offsetWidth * 0.2 * 1.5 + "px";
        } else {
            c[i].style.width = size.offsetWidth * 0.5 + "px";
            c[i].style.height = size.offsetWidth * 0.5 * 1.5 + "px";
        }
    }
}
imgResize();

document.getElementById("search-wrapper").onkeyup = (e) => {
    let q = $("#q").val();
    console.log(q);
    if (q.length > 0) {
        $("#clear-search").css("display", "block");
    } else {
        $("#clear-search").css("display", "none");
    }
    if (q != "") {
        $.get("../../model/productPage/search.php", {
                search: q
            },
            function(data, status) {
                if (status === 'success') {
                    if (data != "no data find") {
                        let ndata = JSON.parse(data);
                        let mes = "<ul>";
                        ndata.forEach(myFunction);

                        function myFunction(item, index) {
                            let productName = item.name;
                            let id = item.id;
                            let length = productName.length;
                            if (length >= 53) {
                                productName = productName.substr(0, 50);
                                productName += "...";
                            }
                            mes +=
                                `<li><a href="../detail/index.php?view=${id}">${productName} | <span style="font-size:12px">id : ${id}</span></a></li>`;
                        }
                        mes += "</ul>"
                        $("#search-result").html(mes);
                    } else $("#search-result").html("Không có kết quả");
                }
            });
    }
}
$("#q").focus(function() {
    $("#search-result").css("display", "block");
});

$(document).click(function(e) {
    let a = $("#search-result");
    let b = $("#q");
    let c = $("#clear-search");
    if ((!a.is(e.target) && a.has(e.target).length === 0) &&
        (!b.is(e.target) && b.has(e.target).length === 0) &&
        (!c.is(e.target) && c.has(e.target).length === 0)) {
        a.css("display", "none");
    }
    let q = $("#q").val();
    if (q.length > 0) {
        c.css("display", "block");
    } else {
        c.css("display", "none");
    }
});
$("#clear-search").click(function(e) {
    $("#q").val("");
});
openSlide = () => {
    $("#slide-menu").css("right", "0px");
    console.log("click");
}
closeSlide = () => {
    $("#slide-menu").css("right", "-400px");
    console.log("click");
}
$("#clear-search").click(function(e) {
    $("#q").val("");
});

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
$(document).ready(function() {
    // if (!getCookie("user-id")) {
    //     $("#user-area").html('<a class="link-login" href="../login/">Đăng nhập</a>');
    // } else {
    //     $("#user-area").html(`<a class="link-login" href="../info/">Tài khoản</a>
    //     <a class="link-login" href="../login/login.html?action=logout">Đăng xuất</a>
    //     <button id="cart"><i class="bi bi-cart"></i></button>`);
    // }
})
addEventListener("resize", () => {
    imgResize();
})