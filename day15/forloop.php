<?php
$a = array();

for ($i = 1; $i < 11; $i++) {
    $a[$i] = 'value'; // add value 'value' to each key.
} 
var_dump($a);
?>

<br />

<?php
for ($i = 10; $i < 11; $i++) {
    echo $i;
} 
?>

<br>

<?php
$b = array(
    'name' => 'Omar',
    'lastname' => 'Rodriguez',
    'age' => '44',
    'country' => 'Puerto Rico',
);

foreach ($b as $key => $value) {
    echo $key;
    echo ': ';
    echo $value;
    echo '<br><hr>';    ///// jednodušší výpis = echo "$key: $value<br><hr>";
}                       ///// nebo echo $key . ': ' . $value . '<br><hr>';


$order = array(  ///array of an arrays
    array(
        'item' => 'mackbook air',
        'price' => '56465123',
    ),
    array(
        'item' => 'apple tv',
        'price' => '56123',
    ),
    array(
        'item' => 'router',
        'price' => '5623',
    ),
    array(
        'item' => 'thing',
        'price' => '563',
    ),
    array(
        'item' => 'green bastard',
        'price' => '56',
    ),
);
$total = 0;
foreach ($order as $product) {
    $total = $total + $product['price'];  // výjpočet totalu
    echo "imma buying " . $product['item'] . " for " . $product['price'] . "<br>";
}
echo $total;