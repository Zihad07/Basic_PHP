<?php

$fruits = "Apple, Mango, Jackfruit, Pineappel";
echo $fruits."\n";

// String to arry

// explode(delemeter,string)
$fruitsArray = explode(', ', $fruits);
print_r($fruitsArray);

// Array to string
// join(join_by, array)

$fruitsString = join(', ', $fruitsArray);
echo $fruitsString.PHP_EOL;


$fruits = "Apple, Mango, Jackfruit, Pineappel,Payera,water melon";
$fruitsArray = explode(', ', $fruits); // problem not exacly result

echo count($fruitsArray)."\n";
// we use regular expression
$fruitsArray = preg_split("/(, |,)/", $fruits);
echo count($fruitsArray)."\n";
print_r($fruitsArray);