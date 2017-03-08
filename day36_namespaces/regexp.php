<?php
// # - označuje konec a začátek patternu
// i = modifier, tendle vypíná case-sensitivity
// a = samotnej pattern

// $pattern ='#a#i';

// $string = 'cat';

// $result = preg_match($pattern, $string, $matches);

// var_dump($result);


$pattern ='#^page_(\d+)$#i';

$string = 'page_33';

$result = preg_match($pattern, $string, $matches);

var_dump($result);

var_dump($matches);