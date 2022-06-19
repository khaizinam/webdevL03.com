<?php
include "../../../system/lib/config.php";
include "../../../system/lib/conn.php";
include "../../model/transactionModel/TransactionModel.php";

$transactionModel = new TransactionModel();

$user_id = $_REQUEST['user_id'];

$result = $transactionModel->GetAll($user_id);

if ($result) echo $result;