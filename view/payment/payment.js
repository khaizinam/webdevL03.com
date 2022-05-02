/*---------------- INIT ---------------------------*/
var cart = [
    {
        id : 1,
        image: "1.jpg",
        name: "Tai nghe Bluetooth",
        price: 200000,
        quantity: 1
    },
    {
        id : 2,
        image: "1.jpg",
        name: "Mũ trẻ em",
        price: 10000,
        quantity: 2
    }
];

localStorage.setItem("cart", JSON.stringify(cart));
var user_id = 1;

/* --------------- MAIN ---------------------------*/

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



function load_cart(){
    var cart = JSON.parse(localStorage.cart);
    var txt = "";
    for (let i=0; i<cart.length; i++){
        txt += `
                    <div class="cart-item">
                        <div class="image">
                            <img src="../../controller/assets/img/trang-chu/`+cart[i].image+`" atl="Product-Image">
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                `+cart[i].name+`
                            </div>
                            <div class="product-number">
                                <div class="product-price center">`+str_money(cart[i].price)+`</div>
                                <span class="center">X</span>
                                <div class="product-quantity">
                                    <div class="quantity-btn center">
                                        <i class="fa-solid fa-caret-left" onclick="change_cart(`+i+`,-1)"></i>
                                    </div>
                                    <div class="data center">`+cart[i].quantity+`</div>
                                    <div class="quantity-btn center">
                                        <i class="fa-solid fa-caret-right" onclick="change_cart(`+i+`,1)"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="money center">
                            <div>
                                `+str_money(cart[i].quantity * cart[i].price)+` <span> &nbsp; VND</span>
                            </div>
                        </div>
                        <div class="delete center">
                            <i class="fa-solid fa-trash" onclick="delete_cart(`+i+`)"></i>
                        </div>
                    </div>
        `;
    };
    document.getElementById('cart').innerHTML = txt;
}

function delete_cart(i){
    var cart = JSON.parse(localStorage.cart);
    cart.splice(i,1);
    localStorage.cart = JSON.stringify(cart);
    load_bill();
    load_cart();
}

function change_cart(i,t){
    var cart = JSON.parse(localStorage.cart);
    cart[i].quantity+=t;
    localStorage.cart = JSON.stringify(cart);
    load_cart();
    load_bill();
}


function load_bill(){
    var cart = JSON.parse(localStorage.cart);
    var total = 0;
    var count = 0;
    cart.forEach(element => {
        count+= element.quantity;
        total+= element.quantity * element.price;
    });
    document.getElementById('total').innerHTML = str_money(total);
    document.getElementById('counter').innerHTML = str_money(count);
    document.getElementById('all-bill').innerHTML = str_money(total);
}

function load_info(id){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        var info = JSON.parse(this.responseText);
        document.getElementById('fullname').value = info.fullname;
        document.getElementById('phone_number').value = info.phone_number;
        document.getElementById('address').value = info.address;
    };
    xhttp.open("POST","controller/get_user.php?id="+id);
    xhttp.send();
}

function payment(){
    var cart = JSON.parse(localStorage.cart);
    cart.forEach(item => {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            alert(this.responseText);
        };
        xhttp.open("POST","controller/buy_product.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var txt ="";
        txt += "id="+item.id;
        txt += "&product_name="+item.name;
        txt += "&price="+item.price;
        txt += "&quantity="+item.quantity;
        txt += "&customer="+user_id;
        xhttp.send(txt);
    });
    return false;
}

load_info(user_id);

load_bill();
load_cart();
