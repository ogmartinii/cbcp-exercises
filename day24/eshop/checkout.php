<?php
require_once './shared/database.php';

$db = new Database();
if($_POST) {
   $orderid = $db->insertOrder(1);
   $db->insertProductsToOrder($_POST['id'], $orderid);
   header('Location:index.php');
}

var_dump($_POST);