<?php 

$fruits = array("banan", "mangor", "apple", "orange","Pine-apple" );

$keyArray = array('a' =>12 , 'b' => 13, 'c' => 14, 12 => 15, 56 );

$array1 = array_slice($fruits,0,3);
$array2 = array_slice($fruits,3);

$newArray = array_merge($array1,$array2);

print_r($array1);
print_r($array2);
print_r($newArray);


$array1 = array_slice($keyArray,0,3);
// $array2 = array_slice($fruits,3);
$array2 = array_slice($keyArray,3,null,true);

$newArray = $array1 + $array2;

print_r($array1);
print_r($array2);
print_r($newArray);



