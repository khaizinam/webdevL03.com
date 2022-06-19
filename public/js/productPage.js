const ProductURL = "../../../api/mainAPI.php?api=product";
imgResize = () => {
    let c = document.getElementsByClassName("wrapper-product");
    let size = document.getElementById("wrapper-product-list");
    let imgWrapper = document.getElementsByClassName("img-product-wrapper");
    let val;
    for (let i = 0; i < c.length; i++) {
        if (size.offsetWidth >= 700) {
            val = 0.2
            Style.setWidth(c[i], Style.getWidth(size) * val - 10 + "px");
            Style.setHeight(c[i], Style.getWidth(size) * val - 10 + 150 + "px");
            Style.setHeight(imgWrapper[i], Style.getWidth(size) * val - 10 + "px");
        } else if (size.offsetWidth >= 280 && size.offsetWidth < 700) {
            val = 0.5;
            Style.setWidth(c[i], Style.getWidth(size) * val - 10 + "px");
            Style.setHeight(c[i], Style.getWidth(size) * val - 10 + 150 + "px");
            Style.setHeight(imgWrapper[i], Style.getWidth(size) * 0.5 - 10 + "px");
        } else {
            val = 0.9;
            Style.setWidth(c[i], Style.getWidth(size) * val - 10 + "px");
            Style.setHeight(c[i], Style.getWidth(size) * val - 10 + 150 + "px");
            Style.setHeight(imgWrapper[i], Style.getWidth(size) * val - 10 + "px");
        }
    }
}

document.getElementById("search-wrapper").onkeyup = (e) => {
    let q = $("#q").val();
    logger(q);
    if (q.length > 0) {
        Display.show('#clear-search');
    } else {
        Display.hide('#clear-search');
    }
    if (q != "") {
        $.get(ProductURL, {
                req: 'getProductBySearch',
                search: q
            },
            function(data, status) {
                if (status === 'success') {
                    if (data.err === false) {
                        logger(data.data);
                        if (!!data.data) {
                            let mes = "<ul>";
                            data.data.forEach((item, index) => {
                                let productName = item.name;
                                let id = item.id;
                                let length = productName.length;
                                if (length >= 53) {
                                    productName = productName.substr(0, 50);
                                    productName += "...";
                                }
                                mes +=
                                    `<li class="d-flex">
                                        <img src="../../../${item.img}" width="40px" alt="icon">
                                        <a href="../detail/index.php?view=${id}">${productName} | <span style="font-size:12px">id : ${id}</span></a>
                                    </li>`;
                            });
                            mes += "</ul>"

                            $("#search-result").html(mes);
                        } else {
                            $("#search-result").html("Không có kết quả");
                        }
                    } else $("#search-result").html("Không có kết quả");
                    delete(data);
                }
            });
    }
}
$("#q").focus(function() {
    Display.show('#search-result');
});

$(document).click(function(e) {
    let a = $("#search-result");
    let b = $("#q");
    let c = $("#clear-search");
    if ((!a.is(e.target) && a.has(e.target).length === 0) &&
        (!b.is(e.target) && b.has(e.target).length === 0) &&
        (!c.is(e.target) && c.has(e.target).length === 0)) {
        Display.hide('#search-result');
    }
    let q = Value.get('#q');
    if (q.length > 0) {
        Display.show('#clear-search');
    } else {
        Display.hide('#clear-search');
    }
});
$("#clear-search").click(function(e) {
    Value.clear('#q');
});
openSlide = () => {
    Css.right('#slide-menu', '0px');
    logger("click");
}
closeSlide = () => {
    Css.right('#slide-menu', '-250px');
    logger("click");
}


//Title of page in categories
//08/05/2022
//Nguyen Huu Khai
$.get("../../model/productPage/cookie.php", {},
    function(data, status) {
        if (status === 'success') {
            if (data === "no") {
                Display.null('.no-log')
                Display.hide('.log');
                Display.hide('.admin-page');
            } else {
                Display.hide(".no-log");
                Display.null('.log');
                if (data === "0") {
                    Display.null('.admin-page');
                } else if (data === "1") {
                    Display.hide('.admin-page');
                }
            }
        }
    });
$.get(ProductURL, {
        req: 'getProductByCateAndPage',
        page: Value.get('#page-https'),
        cate: Value.get('#cate-https'),
    },
    function(data, status) {

        if (status === 'success') {
            if (data.err === false) {
                let n = data.data;
                let mes = ``;
                for (let key in n) {
                    let length = n[key].name.length;
                    let a = ``;
                    if (length >= 73) {
                        n[key].name = n[key].name.substr(0, 70);
                        n[key].name += "...";
                    }
                    n[key].price = parseInt(n[key].price);
                    if (n[key].amount == 0) {
                        a = `<span style="color:red;">${n[key].price.toLocaleString('en-US')} VNĐ<span>
                            <br>
                            <span style="color:red;">Đã hết hàng<span>`;
                    } else {
                        a = `<span>${n[key].price.toLocaleString('en-US')} VNĐ<span>`;
                    }
                    mes += `<div class="wrapper-product">
                                <a href="../detail/index.php?view=${n[key].id}">
                                    <div class="img-product-wrapper">
                                        <div class="img-background">
                                            <img src="../../../public/img/bg-product.jpg" alt="product">    
                                        </div>
                                        <div class="img-product">  
                                            <img  src="../../../${n[key].img}" alt="product"> 
                                        </div>
                                    </div>
                                    <div class="content-product">
                                        <!-- show name product -->
                                        <div class="detail-product">
                                            <span>${n[key].name}</span>
                                        </div>
                                        <div class="danh-gia">
                                            <span>Số lượng : ${n[key].amount}</span>
                                        </div>
                                        <!-- price -->
                                        <div class="price">
                                            ${a}
                                        </div>
                                    </div>
                                </a>
                            </div>`;
                }
                $("#wrapper-product-list").html(mes);
                imgResize();
            }
            delete(data);
        }
    });
imgResize();
$.get("../../model/productPage/category.php", {},
    function(data, status) {
        if (status === 'success') {
            let ndata = JSON.parse(data);
            let mes = ``;
            let cate = Value.get('#cate-https');
            var found = false;
            logger(ndata);
            for (let key in ndata) {
                if (ndata[key].href == cate) {
                    $("#h3-1").html(ndata[key].name);
                    $("#menu-direct").html(`<a href="index.php?cate=all&page=1">Trang chủ</a>
                    <span>></span>
                    <span>${ndata[key].name}</span>`);
                    found = true;
                } else {
                    if (found == false) {
                        $("#h3-1").html("Trang chủ");
                    }
                }
                mes += `<li><a href="index.php?cate=${ndata[key].href}">${ndata[key].name}</a> </li>`;
            }
            $("#show-list-categories").html(mes);
        }
    });

addEventListener("resize", () => {
    imgResize();
})