<?php
header("Cache-Control: no-cache, must-revalidate");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods:GET, POST,PUT,HEAD");
header("Content-type: application/json");
header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");
    //
    include_once("config/config.php");

    if(isset($_GET['api'])){
        switch ($_GET['api']) {
            case 'product':
                include_once("controller/ProductController.php");
                $ProductController = new ProductController();
                break;
            default:
                $data = array(
                    'err' => true,
                    'err_mess' => 'dont have any type api !',
                    'data' => null
                );
                echo json_encode($data);
                break;
        }
    }else{
        $data = array(
            'err' => true,
            'err_mess' => 'dont have any type api !',
            'data' => null
        );
        echo json_encode($data);
    }
    
?>