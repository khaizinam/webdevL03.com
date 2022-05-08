<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods:GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");

class DataBase    
{
    public $host = HOSTNAME;
    public $name = USERTNAME;
    public $pass = PASS;
    public $database = DATABASEBNAME;


    public $link;
    public $error;
    public  function __construct()
    {
        $this->connectDB();
    }

    public function connectDB(){
            $this->link = new mysqli($this->host,$this->name,$this->pass,$this->database);
            if ($this->link -> connect_errno) {
                echo "Failed to connect to MySQL: ".$this->link -> connect_error;
                exit();
              }
    }
    
    public function send($query){
        $result = $this->link->query($query);
        if($result){
            return $result;
        }else {
            return false;
        }
    }

    public function num($query){
        $result = $this->link->query($query);
        return mysqli_num_rows($result);
    }
}