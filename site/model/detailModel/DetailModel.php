<?php
class DetailModel extends DataBase{
    public function getDetail($id) {
        $result = $this->send("SELECT * FROM product, cate WHERE product.ID=$id AND product.ID = productID");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $data = [
                'id' => $id,
                'name' => $row['name'],
                'img' => $row['img'],
                'amount' => $row['amount'],
                'detail' => $row['detail'],
                'star' => $row['star'],
                'price' => $row['price'],
                'cate' => $row['cate']
            ];
            return json_encode($data);
        } else {
            return "{}";
        }
    }

    public function getComments($id, $page) {
        $result = $this->send("SELECT * FROM comment, user WHERE productID=$id AND page_id = $page AND comment.author_ID = user.ID");
        $data = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                array_push($data,[
                    'author_id' =>$row['author_ID'],
                    'username' => $row['username'],
                    'content' => $row['content'],
                    'star' => $row['star'],
                ]);

            }
            return json_encode($data);
        } else {
            return "{}";
        }
    }
}