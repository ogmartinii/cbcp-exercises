<?php
session_start();
require_once './shared/database.php';

$db = new Database();

if($_POST) {
   $orderid = $db->insertOrder($_SESSION['userid']);
   foreach($_SESSION['products'] as $id){
       $db->insertProductsToOrder($id, $orderid);
   }
   $_SESSION['products'] = [];
   header('Location:index.php');
}