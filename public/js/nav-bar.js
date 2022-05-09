openSlide = () => {
    $("#slide-menu").css("right", "0px");
    console.log("click");
}
closeSlide = () => {
    $("#slide-menu").css("right", "-250px");
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

//Title of page in categories
//08/05/2022
//Nguyen Huu Khai
$.get("../../model/productPage/cookie.php", {},
    function(data, status) {
        if (status === 'success') {
            if (data === "no") {
                $(".no-log").css("display", null);
                $(".log").css("display", "none");
            } else {
                $(".no-log").css("display", "none");
                $(".log").css("display", null);
                if (data === "0") {
                    $(".admin-page").css("display", null);
                } else if (data === "1") {
                    $(".admin-page").css("display", "none");
                }
            }
        }
    });
$.get("../../model/productPage/category.php", {},
    function(data, status) {
        if (status === 'success') {
            let ndata = JSON.parse(data);
            let mes = ``;
            for (let key in ndata) {
                mes += `<li><a href="index.php?cate=${ndata[key].href}">${ndata[key].name}</a> </li>`;
            }
            $("#show-list-categories").html(mes);
        }
    });