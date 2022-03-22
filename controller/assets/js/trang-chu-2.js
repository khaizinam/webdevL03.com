document.getElementById('drop-down').style.display = 'none';
var state = 0;
btnDrop = (e) => {
    var g = document.getElementById('inner-1');
    var res = '';
    for (let key in mes[e]) {
        res += `<div class="drop-box">`;
        for (let key2 in mes[e][key]) {
            let f = mes[e][key][key2];
            res += `<a href="` + f.link + `"` + f.property + `>` + f.content + `</a>`;
        }
        res += `</div>`;
    }
    g.innerHTML = res;
    if (document.getElementById('drop-down').style.display === 'none') {
        document.getElementById('drop-down').style.display = 'block';
        state = e;
        console.log(state);
    } else if (document.getElementById('drop-down').style.display === 'block') {
        if (state != e) state = e;
        else if (state == e) {
            document.getElementById('drop-down').style.display = 'none';
            state = 0;
        }
    }
}
const SITE_URL = "http://localhost:8080/webl03/model";

class App {
    constructor() {
        this.data = {};
        this.boot();
    }
    network(add, printProduct) {
        $.get(SITE_URL + "/updatePage/show-product.php", {
                cate: category
            },
            function(data, status) {
                if (status === 'success') {
                    this.data = JSON.parse(data);
                    printProduct(add, this.data);
                }
            });
        if (category == 'all') {
            this.popular();
        }
    }

    popular() {
        $.get(SITE_URL + "/updatePage/popular.php", {},
            function(data, status) {
                if (status === 'success') {
                    let newdata = JSON.parse(data);
                    newdata.forEach(myFunction);

                    function myFunction(item, index) {
                        document.getElementById("title-popular").innerHTML += '<a  href="' + item.href + '">' + item.name + '</a>';
                    }
                }
            });
    }
    add(link, img, ctp, s, cost) {
        let url_img = "../../controller/assets/img/trang-chu/";
        let parent = document.getElementsByClassName("wrapper-product-list")[0];
        let c = document.createElement("div");
        c.setAttribute("class", "wrapper-product");
        c.innerHTML = `<a href="` + link + `">
                            <div class="img-product">
                                <img src="` + url_img + img + `" alt="product">
                            </div>
                            <div class="content-product">
                                <div class="detail-product">
                                    <span>` + ctp + `</span>
                                </div>
                                <div class="danh-gia">
                                    <span>đã bán :</span><span>` + s + `</span>
                                </div>
                                <div class="price">
                                    <span>` + cost + `đ</span>
                                </div>
                            </div>
                        </a>`;
        parent.appendChild(c);
    }
    printProduct(add, data) {
        data.forEach(myFunction);

        function myFunction(item, index) {
            add(item.url, item.img, item.c, item.sold, item.cost);
        }
    }
    boot() {
        this.network(this.add, this.printProduct);
        this.imgResize();
        this.searchAction();
    }
    searchAction() {
        let searchBox = document.getElementById("search-wrapper");
        let resultPrint = document.getElementById("search-result");
        searchBox.onkeyup = (e) => {
            let q = document.getElementById("q").value;
            console.log(q);
            if (q != "") {
                $.get(SITE_URL + "/updatePage/search.php", {
                        search: q
                    },
                    function(data, status) {
                        if (status === 'success') {
                            if (data != "no data find") {
                                let ndata = JSON.parse(data);
                                let mes = "<ul>";
                                ndata.forEach(myFunction);

                                function myFunction(item, index) {
                                    mes +=
                                        `<li>
                                        <a href="../detail/index.php?view=` + item.id + `">` + item.name + ` | <span style="font-size:12px">id : ` + item.id + `</span></a>
                                    </li>`;
                                }
                                mes += "</ul>"
                                resultPrint.innerHTML = mes;
                            } else resultPrint.innerHTML = "Không có kết quả";
                        }
                    });
            }
        }
    }
    imgResize() {
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
}


var category = document.getElementById("cate").innerHTML;
var app = new App();
addEventListener("resize", () => {
    app.imgResize();
})