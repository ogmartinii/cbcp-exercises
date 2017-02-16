<?php
require_once '../shared/database.php';
if($_POST) {
    $db = new Database();
    $db->insertproducts($_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']); // names of fields in form
    header('Location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add product</title>
</head>
<body>

<h2>Add product</h2>

<form action="" method="post">
Name:
<br>
<input type="text" name="name">
<br>
Price:
<br>
<input type="text" name="price">
<br>
Size:
<br>
<input type="text" name="size">
<br>
Color:
<br>
<input type="text" name="color">
<br>
<input type="submit">
</form>
<br>
<a href="products.php">List of products</a>
</body>
</html>