<?php 

$my_greeting = 'Hello, world!';

echo $my_greeting;

$first_name = "Martin";
$surname = "Slezák";
$year_of_birth = 1988;
$height = 215;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php playground</title>
</head>
<body>
<br />
First name: <?php echo $first_name; ?> <br />
Second name: <?php echo $surname; ?> <br />
YOB: <?php echo $year_of_birth; ?> <br />
Height: <?php echo $height; ?> cm<br />

<?php define('MY_OS', 'Win10'); ?>
My OS is <?php echo MY_OS; ?>

<br />
<br />

<?php 

$value = 1;

$value +=10;
$value -=6;
$value *=2;
$value /=2;

echo $value;

?>

<br /><br />

<?php

$final_string = 'Hello, '.'world!';

echo $final_string;

?>
<br />



<?php 

$actualTemp = -6;
$tempF = (9/5) * $actualTemp + 32;

// function celsius_to_farenheit($celsius) {
//     return 
// })


?>

We have <?php echo $tempF; ?> °F

<br />
<br />

I am a
<?php

$male = true;
if($male == true) {
    echo 'male';
}
else
{
    echo 'female';
}
?>

<br />

I am a <?php echo $male == true ? 'male' : 'female'; ?>

<br />

<?php 
function print_is_even($number) {
    $result = $number % 2 == 0 ? 'even' : 'odd';
    echo $result;
}

$number_to_test = 1;
?>

The number <?php echo $number_to_test; ?> is <?php print_is_even($number_to_test); ?>

</body>
</html>