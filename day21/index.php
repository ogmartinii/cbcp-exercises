<?php
require_once 'vehicle.class.php';
require_once 'car.class.php';
require_once 'horse.class.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $vehicle = new vehicle;
        $vehicle->avg_speed = 5; 
        echo $vehicle->travel(200);

        $my_car = new car;
        $my_car->change_color('red');
        var_dump($my_car);

        $horse = new horse;
        $horse->feed();
        var_dump($horse);
    ?>
</body>
</html>