<?php
class UserModel extends DataBase{
    public function Login($username, $password){
        $sql = "SELECT * 
        FROM `user` 
        WHERE `username`='$username'";

        $result = $this->send($sql);

        if ($result->num_rows == 0){
            // Không tồn tại tài khoản
            return 2;
        }
        else{
            $row = $result->fetch_assoc();
            
            if ($password!=$row['password']){
                //Mật khẩu không đúng
                return 1;
            }
            else{
                setcookie("user-name", $row["username"], time() + (86400), "/");
                setcookie("user-id", $row["ID"], time() + (86400), "/");
                setcookie("check-login","true", time() + (86400), "/");
                // Đăng nhập thành công
                if ($row['type']==1){
                    return "Customer";
                }
                else if ($row['type']==0){
                    return "Admin";
                }
            }
        }
    }

    public function Register($username, $password){
        $sql = "INSERT INTO `user` (`username`,`password`,`type`) VALUES ('$username','$password',1)";
        if ($this->send($sql)) return true;
        else return false;
    }

    public function CheckUser($username){
        $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
        $result = $this->num($sql);

        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function GetInfo($id){
        $result = $this->send("SELECT * FROM `user` WHERE `id`=$id");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $data = [
                'id' => $id,
                'type' => $row['type'],
                'username' => $row['username'],
                'fullname' => $row['full_name'],
                'phone_number' => $row['p_number'],
                'email' => $row['email'],
                'address' => $row['address']
            ];
            return json_encode($data);
        } else {
            return "{}";
        }
    }

    public function Update($id, $fullname, $phone_number, $address, $email){
        $sql = "UPDATE `user`
            SET
            `full_name` = '$fullname',
            `p_number` = '$phone_number',
            `address` = '$address',
            `email` = '$email'
            WHERE `id` = $id
            ";
        if ($this->send($sql)) return true;
        else return false;

    }

    public function ChangePass($id, $old_pass, $new_pass){
        $result = $this->send("SELECT `password` FROM `user` WHERE `id` = $id");

        $row = $result->fetch_assoc();
        
        if ($old_pass != $row['password']) {
            return 2;
        } else {
            $sql = "UPDATE `user` SET `password`='$new_pass' WHERE `id`=$id";
            $result = $this->send($sql);
            if ($result) {
                return 3;
            } else {
                return 1;
            }
        }
    }
}

?>