<?php
class DataBase    
{
    public $host = HOSTNAME;
    public $name = USERTNAME;
    public $pass = PASS;
    public $database = DATABASEBNAME;


    public $link;
    public $eror;
    public  function __construct()
    {
        $this->connectDB();
    }
    public function connectDB(){
            $this->link = new mysqli($this->host,$this->name,$this->pass,$this->database);
            if (!$this->link) {
                $this->eror = "Connect fail".$this->link->connect_error;
                return false;
            }
    }
    public function select($query){ // select
        $result = $this->link->query($query) or 
        die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            //co ket qua
            return $result;
        }else
        { 
            //khong co ket qua
            return $result;
        } 
    }
    public function send($query){
        $result = $this->link->query($query) or 
        die($this->link->error.__LINE__);
        if($result){
            return $result;
        }else
        { 
            return false;
        } 
    }
}  
?>