<?php 

$fruits = array("banan", "mangor", "apple", "orange","Pine-apple" );

$keyArray = array('a' =>12 , 'b' => 13, 'c' => 14, 12 => 15, 56 );

// $newArray = array_slice($fruits,-2,2);
// $newArray = array_slice($fruits,2,3);
// $newArray = array_slice($fruits,2,3,true);


// print_r($newArray);

// no change in original array.
// print_r($fruits);


// For associative array
$newArray = array_slice($keyArray,0);
$newArray = array_slice($keyArray,1,3);
// for preserve key
$newArray = array_slice($keyArray,1,-1,true);
$newArray = array_slice($keyArray,1,null,true);
print_r($newArray);
