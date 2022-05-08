<?php
class TransactionModel extends DataBase{
    public function GetAll($id){
        $result = $this->send("SELECT * FROM `transaction` WHERE `customer`=$id");
        $array = [];
        while ($row = $result->fetch_assoc()) {
            $data = [
                'ID' => $row['ID'],
                'product_name' => $row['product_name'],
                'price' => $row['price'],
                'quantity' => $row['quantity'],
                'time' => $row['time']
            ];
            array_push($array, $data);
        }
        return json_encode($array);
    }

    public function Insert($id, $product_name, $price, $quantity, $customer, $time, $phone_number, $address){
        $sql = "INSERT INTO `transaction` 
        (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`, `phone_number`, `address`)
        VALUES
        ($id, '$product_name', $price, $quantity, $customer, '$time', '$phone_number', '$address')";
        if ($this->send($sql)) {
            return true;
        } else {
            return false;
        }
    }
}

?>