<?php
    if(isset($_GET['api'])){
        switch ($_GET['api']) {
            case 'product':
                include_once("../controller/ProductController.php");
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