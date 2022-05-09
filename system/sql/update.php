<?php
    include("../lib/config.php");
    include("../lib/conn.php");
    class DBmanage{
        public $db;
        public function __construct()
        {
            $this->db = new DataBase();
        }
        
    }
    $manager = new DataBase();
?>