<?php 
class DataBase    
    {
        public $host= HOSTNAME;
        public $name= USERTNAME;
        public $pass= PASS;
        public $database= DATABASEBNAME;

        public $link;
        public $err;
        public  function __construct()
        {
            $this->connectDB();
        }
        public function connectDB(){
                $this->link = new mysqli($this->host,$this->name,$this->pass,$this->database);
                if (!$this->link) {
                    $this->err = "Connect fail".$this->link->connect_error;
                    return false;
                }
        }
        public function get($query){
            $result = $this->link->query($query) or 
            die($this->link->error.__LINE__);
            return $result;
        }
        public function send($query){
            $this->link->query($query) or 
            die($this->link->error.__LINE__);      
        }
        public function getNumRow($query){
            $result = $this->link->query($query);
            return mysqli_num_rows($result);
        }
    } 

    class Cookie{
        public static function set($cname , $cvalue){
            if(!self::check($cname)){
                setcookie($cname, $cvalue, time() + (86400 * 1), "/");   
            }else {
                $_COOKIE[$cname] = $cvalue;
            }
        } 
        public static function get($cname){
            if(self::check($cname)){
                return $_COOKIE[$cname];   
            }else return false;
        } 
        public static function delete($cname){
            if(self::check($cname)){
                setcookie($cname, "", time()-3600, "/");
            }
        } 
        public static function check($cname){
            if(isset($_COOKIE[$cname])){
                return true;
            }else return false;
        }
    }
    class Session{
        public static function init()
        {
            if(version_compare(phpversion(), '5.4.0', '>=')){
                if(session_id() === '') {
                    session_start();
                }else {
                    if(session_status() === PHP_SESSION_NONE){
                        session_start();
                    }
                }
            }   
        }
        public static function set($key, $val){
            $_SESSION[$key] = $val;
        }
        public static function get($key){
            if(self::check($key)){
                return $_SESSION[$key];
            } else return false;
        }
        public static function check($val){
            if(!isset($_SESSION[$val])){
                return false;
            }else return true;
        }
        public static function destroy(){
            session_destroy();   
        }
    }  
?>