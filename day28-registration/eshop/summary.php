<?php
require_once './shared/database.php';
$db = new Database();
session_start();
echo "you are buying this: <br><br>";
foreach ($_SESSION['products'] as $id) {
    $product = $db->getproduct($id);
    echo htmlspecialchars($product['name']);
    echo htmlspecialchars($product['price']) . '<br>';
}
?>
<form action="checkout.php" method="post">
<input type="submit" value="Checkout" name="submit">
</form>