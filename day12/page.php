<?php 

$variable = 'test';
var_dump(_SERVER);
var_dump($variable);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A website</title>
</head>
<body>
    
    <?php include('header.php'); ?>

    <?php include 'page-content.php'; ?>

    <?php include 'footer.php'; ?>

</body>
</html>