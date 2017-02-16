<?php
require_once './shared/database.php';
$db = new Database();
$product = $db->getproduct($_POST['id']);

var_dump($_POST);

echo htmlspecialchars($product['name']) . '<br>';
echo htmlspecialchars($product['price']);
?>
<form action="checkout.php" method="post">
<input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
<input type="submit" value="Checkout">
</form>