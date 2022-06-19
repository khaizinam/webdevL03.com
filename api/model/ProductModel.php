<?php 
class ProductModel extends DataBase
{
    public function getProductByCateAndPage($cate,$page,$LimtProduct){
        //Start
        $getstart = ($page - 1) * $LimtProduct;
        if($cate != "all"){
            $query = "SELECT * 
            FROM product 
            WHERE `cate` = '$cate'
            LIMIT $getstart,$LimtProduct";
        }else {
            $query = "SELECT * 
            FROM product  
            LIMIT $getstart,$LimtProduct";
        }
        //
        $sql = $this->get($query);
        $count = $this->getNumRow($query);
        //
        if($count > 0){
            $data = array();
            while($rows = $sql->fetch_array()){
                array_push($data, 
                array(
                    'id' => $rows['ID'],
                    'img' => $rows['img'],
                    'cate_code' => $rows['cate'],
                    'name' => $rows['name'],
                    'price' => $rows['price'],
                    'amount' => $rows['amount']
                ));
            }
            return $data;
        }else return null;
    }
    public function getOneProductById($id){
        // Check cate and page
        $result = $this->get("SELECT 
        product.ID AS ID,
        product.name AS name,
        product.img AS img,
        product.amount AS amount,
        product.detail AS detail,
        product.price AS price,
        cate.name AS cate
        FROM product, cate 
        WHERE product.ID=$id AND cate.href = product.cate");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return null;
        }
    }
    public function getProductBySearch($SEARCH_VALUE){
        $search = $SEARCH_VALUE;
        $sql = "SELECT * 
            FROM product 
            WHERE name LIKE '%$search%' OR ID LIKE '%$search%'
            ORDER BY ID ASC LIMIT 5"; 
        $res = $this->get($sql);
        $count = $this->getNumRow($sql);
        if($count > 0){
            $data = array();
            while($rows = $res->fetch_array()){
                array_push($data, array('id' => $rows['ID'],
                'img' => $rows['img'],
                "name" => $rows['name']));
            }
            return $data;
        }else null;
    }
}

?>