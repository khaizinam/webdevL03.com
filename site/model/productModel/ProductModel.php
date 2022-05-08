<?php
class ProductModel extends DataBase{
    public function SubQuantity($id, $quantity){
        $sql = "SELECT `amount` FROM `product` WHERE `ID`=$id";
        $amount = $this->send($sql)->fetch_assoc();
        $result = $amount['amount'] - $quantity;
        if ($result<=0){
            return 0;
        }
        $sql = "UPDATE `product`
        SET `amount`=$result
        WHERE `ID`=$id
        ";
        if ($this->send($sql)){
            return 1;
        }
        else{
            return 0;
        }
    }
}

?>