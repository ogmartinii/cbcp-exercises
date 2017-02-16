<?php

$course_name = "coding bootcamp";

$my_name = "og";

$result = 11-3;

$instructors = array('Jan', 'Daniel', 'Michal', 'Jakub');

var_dump($instructors);

function greet_me() {
    echo "Good morning Prague!";
}

greet_me();

class bootcamp {
    public $instructors = array('Jan', 'Daniel', 'Michal', 'Jakub');
}

$boot = new bootcamp;
var_dump($boot->instructors);

$my_greeting = "Good morning" . " " . $my_name;

echo $my_greeting;

sort($instructors);
var_dump($instructors);

foreach($instructors as $name)
echo greet_someone($name) . "<br>";

function greet_someone($name) {
    return "Good morning" . " " . $name;
}

