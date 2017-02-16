<!-- toto bude vypisovat pouze zboží které je zadané v databázi-->
<?php
require_once('../shared/database.php');
$db = new Database();
$products = $db->getproducts();
foreach ($products as $product) {
    echo 'Name:' . ' ' . htmlspecialchars($product['name']) . '<br>'; // htmlspecialchars aby nešlo heknout stránku (XSS attack)
    echo 'Price:' . ' ' . htmlspecialchars($product['price']) . 'Kč' . '<br>';
    echo 'Size:' . ' ' . htmlspecialchars($product['size']) . '<br>';
    echo 'Color:' . ' ' . htmlspecialchars($product['color']) . '<br><hr>';
    // var_dump($product);
}
?>
<a href="addproduct.php">Add product</a>