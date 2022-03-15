document.getElementById('drop-down').style.display = 'none';
console.log(document.getElementById('drop-down').style.display);
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
    console.log(document.getElementById('drop-down').style.display);
}


class App {
    constructor(data) {
        this.wrpList = document.getElementsByClassName("wrapper-product-list")[0];
        this.data = {};
        this.boot(data);
        this.get();
    }
    network(d) {
        this.data = d;
    }
    add(link, img, ctp, s, cost) {
        let c = document.createElement("div");
        c.setAttribute("class", "wrapper-product");
        c.innerHTML = `<a href="` + link + `">
                            <div class="img-product">
                                <img src=` + img + `.png alt="product">
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
        this.wrpList.appendChild(c);
    }
    printProduct(d) {
        for (const key in d) {
            this.add(d[key].link, d[key].img, d[key].details, d[key].sold, d[key].cost);
        }
    }
    get() {
        $("a").click(function(e) {
            e.preventDefault();
            let u = e.target.getAttribute('href');
            console.log(u);
            $.ajax({
                url: u,
                type: "GET", //type of posting the data
                data: "",
                success: function(data) {
                    //what to do in success
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    //what to do in error
                },
                timeout: 15000 //timeout of the ajax call
            });
        });
    }
    boot(data) {
        this.network(data);
        this.printProduct(this.data);
    }
}



addEventListener("load", () => {
    let app = new App(data);
})
addEventListener("resize", () => {

})