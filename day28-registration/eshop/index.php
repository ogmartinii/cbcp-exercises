<!-- toto bude vypisovat pouze zboží které je zadané v databázi-->
<?php
session_start();
require_once('./shared/database.php');
require './shared/header.php';

$db = new Database();
$products = $db->getproducts();

if($_POST) {
    if(!isset($_SESSION['products'])){
        $_SESSION['products'] = [];
    }
    $_SESSION ['products'][] = $_POST['id'];
    header('Location:index.php');
}

// echo htmlspecialchars($db->getUser($_SESSION['userid'])['name']);
?>
<h1>KEWL E-SHOP</h1>


<?php
foreach ($products as $product) {
    echo 'Name:' . ' ' . htmlspecialchars($product['name']) . '<br>'; // htmlspecialchars aby nešlo heknout stránku (XSS attack)
    echo 'Price:' . ' ' . htmlspecialchars($product['price']) . 'Kč' . '<br>';
    echo 'Size:' . ' ' . htmlspecialchars($product['size']) . '<br>';
    echo 'Color:' . ' ' . htmlspecialchars($product['color']) . '<br>';
    echo '<form action="" method="post">'
        . '<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
        . '<input type="submit" value="Buy this">'
        . '</form><hr>';
    // var_dump($product);
}
?>
