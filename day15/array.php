<?php
$a = array(2, 8, 9, '54');
var_dump($a);

$b = array(
    'name' => 'john',
    'lastname' => 'walker',
    'city' =>'ústí nad labem',
    'country' => 'mongolia',
    'job' => 'nope',
);
$b[] = 456; //přidá 456 na první available key (0 - nula)
$b['age'] = 123; // přidání nový proměný age do array a přiřazení hodnoty 123.
$b['name'] = 'Johnny';
echo $b['country'];
var_dump($b);

$c = [1,2,3,4,5];
$c[] = 9; // přidá element nakonec
var_dump($c);

