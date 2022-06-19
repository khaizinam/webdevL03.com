<?php

    class ProductController{
        private $LimtProductOnOnePage = 20;
        private $model;
        private $REQUEST_METHOD;
        private $REQUEST_VALUE;
        public function __construct()
        {
            $this->model = new ProductModel();
            $this->checkRequest();
            $this->RequestMapping($this->REQUEST_VALUE , $this->REQUEST_METHOD);
        }
        public function checkRequest(){
            if(isset($_SERVER["REQUEST_METHOD"])){
                $REQUEST_METHOD = $_SERVER["REQUEST_METHOD"];
                if($REQUEST_METHOD == "GET"){
                    if(isset($_GET["req"])){
                        $REQUEST_VALUE = $_GET["req"];
                    }else  $REQUEST_VALUE = "NO";
                }else if($REQUEST_METHOD == "POST"){
                    if(isset($_POST["req"])){
                        $REQUEST_VALUE = $_POST["req"];
                    }else  $REQUEST_VALUE = "NO";
                }else if($REQUEST_METHOD == "PUT"){
                    if(isset($_PUT["req"])){
                        $REQUEST_VALUE = $_PUT["req"];
                    }else  $REQUEST_VALUE = "NO";
                }
            }else {
                $REQUEST_METHOD = "NO";
                $REQUEST_VALUE = "NO";
            }
            $this->REQUEST_METHOD = $REQUEST_METHOD;
            $this->REQUEST_VALUE = $REQUEST_VALUE;
        }
        public function RequestMapping($value , $REQUEST_METHOD){
            switch ($REQUEST_METHOD) {
                case 'GET':
                    $this->GETRequest($value);
                    break;
                case 'POST':
                    $this->POSTReQuest($value);
                    break;
                case 'PUT':
                    $this->POSTReQuest($value);
                    break;
                case 'HEAD':
                    $this->POSTReQuest($value);
                break;
                default:
                    $data = array(
                        'err' => true,
                        'err_mess' => 'cant find Request Method !',
                        'data' => null
                    );
                    echo  json_encode($data);
                break;
            }
            
        }
        private function getProductByCateAndPage(){
            if(isset($_GET['cate'])){
                $cate = $_GET['cate'];
            }else $cate = "all";
            //
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else $page = 1;
            //
            $data = array(
                'err' => false,
                'err_mess' => 'send list of product was success',
                'data' => $this->model->getProductByCateAndPage($cate,$page,$this->LimtProductOnOnePage)
            );
            return $data;
        }
        private function getOneProductById(){
            if(isset($_GET['view'])){
                $IdProduct = $_GET['view'];
                $data = array(
                    'err' => false,
                    'err_mess' => 'send one product success',
                    'data' => $this->model->getOneProductById($IdProduct)
                );
            }else {
                $data = array(
                    'err' => true,
                    'err_mess' => 'cannot find ID product on GETRequest',
                    'data' => null
                );
            }
            return $data;
        }
        private function getProductBySearch(){
            if(isset($_GET['search'])){
                $SEARCH_KEY = $_GET['search'];
                $data = array(
                    'err' => false,
                    'err_mess' => 'send search key success',
                    'data' => $this->model->getProductBySearch($SEARCH_KEY)
                );
            }else {
                $data = array(
                    'err' => true,
                    'err_mess' => 'cannot find search key',
                    'data' => null
                );
            }
            return $data;
        }
        private function GETRequest($value){
            switch ($value) {
                case 'getProductByCateAndPage':
                    // Check cate and page
                    $data = $this->getProductByCateAndPage();
                    break;
                case 'getOneProductById':
                    $data = $this->getOneProductById();
                    break;
                case 'getProductBySearch':
                    $data = $this->getProductBySearch();
                    break;
                default:
                    $data = array(
                            'err' => true,
                            'err_mess' => 'cant find Request action GET!',
                            'data' => null
                    );
                break;
            }
            echo json_encode($data);
        }
        public function POSTReQuest($value){
            switch ($value) {
                default:
                    echo "can't found request in GET method";
                break;
            }
        }
        public function PUTReQuest($value){
            switch ($value) {
                default:
                    echo "can't found request in GET method";
                break;
            }
        }
    }
?>