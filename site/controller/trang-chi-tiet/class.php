<?php
class DetailModel{
    public $db;
    public function __construct()
    {
        $this->db = new DataBase();
    }
    public function getDetail($id) {
        $query = "SELECT * 
            FROM product
            WHERE `ID` = $id";
        $num = $this->db->num($query);
        if ($num > 0) {
            $result = $this->db->send($query);
            $row = $result->fetch_assoc();
            $data = [
                'id' => $id,
                'name' => $row['name'],
                'img' => $row['img'],
                'amount' => $row['amount'],
                'detail' => $row['detail'],
                'price' => $row['price'],
                'cate' => $row['cate']
            ];
            return json_encode($data);
        } else {
            return "{}";
        }
    }

    public function getComments($id, $page) {
        $query = "SELECT * FROM 
            comment, user 
            WHERE productID=$id AND page_id = $page AND comment.author_ID = user.ID";
        $result = $this->db->send($query);
        $data = [];
        $num = $this->db->num($query);
        if ($num > 0) {
            while($row = $result->fetch_assoc()){
                array_push($data,[
                    'author_id' =>$row['author_ID'],
                    'username' => $row['username'],
                    'content' => $row['content']
                ]);

            }
            return json_encode($data);
        } else {
            return "{}";
        }
    }
}
?>