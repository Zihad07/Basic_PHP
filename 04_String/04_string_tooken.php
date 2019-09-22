
<?php

$string = "Hello world,world How are you";

$parts = explode(' ',$string);
// print_r($parts);
echo PHP_EOL;

$orginal = join(" ",$parts);
// echo $orginal.PHP_EOL;

// each character tokken
$parts2 = str_split($string);
// print_r(($parts2));

// user itterator
$parts3 = strtok($string," ,");

// while($parts3){
//     echo $parts3."\n";
//     $parts3 = strtok(" ,");
// }

// another eassy way we can split a string by regular expression
$parts5 = preg_split("/ |,/",$string);
print_r($parts5);