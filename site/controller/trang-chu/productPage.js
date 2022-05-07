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
    let q = document.getElementById("q").value;
    console.log(q);
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
                                `<li><a href="../detail/index.php?view=` + id + `">` + productName + ` | <span style="font-size:12px">id : ` + id + `</span></a></li>`;
                        }
                        mes += "</ul>"
                        document.getElementById("search-result").innerHTML = mes;
                    } else document.getElementById("search-result").innerHTML = "Không có kết quả";
                }
            });
    }
}
addEventListener("resize", () => {
    imgResize();
})