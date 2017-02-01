<?php

require_once('var_show.php');

$variable = 'OG';

$fruit = array(
    'Apple',
    'Pear',
    'Orange'
);

$fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

    <?php val_show($variable); ?>
    <?php var_show($variable); ?>
    <?php var_show($fruit); ?>
 

    <br />

    <?php var_show($fruit_colors); ?>
    

    <?php

    $array = array();
    var_show($array);
    
    ?>

    <br />

    <?php

    var_show($fruit);
    $fruit [] = 123;
    $max_value = max($fruit);
    var_show($fruit);
    var_show($max_value);  /// nejposlednější v řadě u string v abecedě

    
    $some_fruit = array_slice($fruit, 2, 2);
    var_show($some_fruit);

    $first_item = array_shift($fruit); // deletes first item

    array_unshift($fruit, 'Mango'); /// adds mango as first item
    var_show($fruit);

    array_push($fruit, 'Melon'); //adds melon at the end of array.
    var_show($fruit);

    array_pop($fruit);
    var_show($fruit);


   $cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
);

$not_owned = array_diff($cars_i_want, $cars_i_have);
var_show($not_owned);
shuffle($not_owned);
var_show($not_owned);
$car_for_boss = array_shift($not_owned);
var_show($car_for_boss);

// next one

$cars_i_want = array(
    'Porshe' => 2000000,
    'Ferrari' => 2500000,
    'Aston Martin' => 2800000,
    'Lamborghini' => 3500000,
    'Bugatti' => 16000000
);

$cars_my_spouse_wants = array(
    'Smart' => 320000,
    'Mercedes' => 620000,
    'Toyota' => 480000,
    'Ford Mustang' => 1200000
);
$cars_i_cant_stand = array(
    'Smart'
);

$result = array_merge($cars_i_want, $cars_my_spouse_wants);
var_show($result);
arsort($result);
var_show($result);
$brands = array_keys($result);
var_show($brands);
$can_stand = array_diff_key($result, array_flip($cars_i_cant_stand));
var_show($can_stand);
array_pop($can_stand);
array_flip($can_stand);
var_show($can_stand);


//// FOREACH LOOP ////





    ?> 
<hr style="clear: both" />
<?php
echo '<ul>';
foreach($cars_i_want as $brand => $price);
{
        echo '<li>'.$price.'<li>';
}

echo '</ul>';
?>

</body>
</html>