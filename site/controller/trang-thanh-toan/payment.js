/*---------------- INIT ---------------------------*/
var cart = [
    {
        id : 37,
        image: "shoe.jpg",
        name: "Tai nghe Bluetooth",
        price: 200000,
        quantity: 1
    },
    {
        id : 43,
        image: "1.jpg",
        name: "Mũ trẻ em",
        price: 10000,
        quantity: 2
    }
];

localStorage.setItem("cart", JSON.stringify(cart));

/* --------------- MAIN ---------------------------*/
var user_id = $("#user-id").val();

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
                            <img src="../../../public/img/productimg/`+cart[i].image+`" atl="Product-Image">
                        </div>
                        <div class="product-info">
                            <div class="product-name center">
                                <div>`+cart[i].name+`</div>
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
    if (cart[i].quantity < 0){
        cart[i].quantity = 0;
    }
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
    $.post(
        "../../controller/trang-thanh-toan/get_user.php?id="+id,
        {},
        function(data){
            var info = JSON.parse(data);
            $('#fullname').val(info.fullname);
            $('#phone_number').val(info.phone_number);
            $('#address').val(info.address);
        }
    );
}

function payment(){
    var phone_number = $('#phone_number').val();
    var address = $('#address').val();
    var cart = JSON.parse(localStorage.cart);
    var response = 1;
    cart.forEach(item => {
        if (item.quantity>0){
            $.ajax({
                method: 'POST',
                url: "../../controller/trang-thanh-toan/buy_product.php",
                data: {
                    id: item.id,
                    product_name: item.name,
                    price: item.price,
                    quantity: item.quantity,
                    customer: user_id,
                    phone_number: phone_number,
                    address: address
                },
                success: function(data){
                    if (data=="False"){
                        response = 0;
                    }
                },
                async: false
            });
        }
    });

    if (response==1){
        alert("Thanh toán thành công!");
        localStorage.cart = "[]";
        load_cart();
    }
    else{
        alert('Có lỗi xảy ra!');
    }
    return false;
}

load_info(user_id);

load_bill();
load_cart();
