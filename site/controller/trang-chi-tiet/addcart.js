function addcart(id, img, name, price, quantity){
    var check = localStorage.getItem('cart');
    if (check==null){
        localStorage.setItem('cart','[]');
    }

    var cart = JSON.parse(localStorage.cart);
    
    var exist = false;
    cart.forEach(item => {
        if (item.id==id){
            exist = true;
        }  
    });

    if (exist==false){
        cart.push({
            id : id,
            image: img,
            name: name,
            price: price,
            quantity: quantity
        });
        alert(`Đã thêm giỏ hàng!`);
    }
    else{
        alert("Sản phẩm đã có!");
    }
    localStorage.setItem("cart", JSON.stringify(cart));
}