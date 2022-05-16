<?php
class DetailModel extends DataBase{
    public function getDetail($id) {
        $result = $this->send("SELECT * FROM product, cate WHERE product.ID=$id AND cate.href = product.cate");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $data = [
                'id' => $id,
                'name' => $row['name'],
                'img' => $row['img'],
                'amount' => $row['amount'],
                'detail' => $row['detail'],
                'price' => $row['price'],
                'cate' => $row['name']
            ];
            return json_encode($data);
        } else {
            return "{}";
        }
    }

    public function getComments($id) {
        $result = $this->send("SELECT * FROM comment, user WHERE comment.product_id=$id AND comment.author_ID = user.ID ORDER BY comment.ID DESC");
        $data = [];
        if ($result->num_rows > 0) {
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

    public function getLatestComment() {
        $result = $this->send("SELECT * FROM comment, user WHERE comment.author_ID = user.ID ORDER BY comment.ID DESC LIMIT 1");
        $data = [];
        if ($result->num_rows > 0) {
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

    public function addComment($userid, $productid, $content) {
        $sql = "INSERT INTO comment (author_ID,product_id,content) VALUES ($userid, $productid, '$content')";
        if ($this->send($sql)) return true;
        else return false;
    }
}