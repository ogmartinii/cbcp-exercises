<!-- toto bude vypisovat pouze zboží které je zadané v databázi-->
<?php
require_once('./shared/database.php');

$db = new Database();
$products = $db->getproducts();
?>
<h1>KEWL E-SHOP</h1>
<?php
foreach ($products as $product) {
    echo 'Name:' . ' ' . htmlspecialchars($product['name']) . '<br>'; // htmlspecialchars aby nešlo heknout stránku (XSS attack)
    echo 'Price:' . ' ' . htmlspecialchars($product['price']) . 'Kč' . '<br>';
    echo 'Size:' . ' ' . htmlspecialchars($product['size']) . '<br>';
    echo 'Color:' . ' ' . htmlspecialchars($product['color']) . '<br>';
    echo '<form action="summary.php" method="post">'
        . '<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
        . '<input type="submit" value="Buy this">'
        . '</form><hr>';
    // var_dump($product);
}
?>