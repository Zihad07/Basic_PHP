<?php 

$colorCodes = array('#00000', '#00ff00','#0000ff','#ff0000');

list($black,$green,$blue,$red) = $colorCodes;
// echo $red;

// Range

// $numbers = range(1,10);
// print_r($numbers);

// foreach (range(1,20,2) as $value) {
//     if($value > 0){
//         echo $value.PHP_EOL;
//     }
// }


// Random

$myarray  = range(30,50);
// print_r($myarray);
// shuffle($myarray);
// print_r($myarray);
// $rand = mt_rand(0,20);
// echo $rand;
// echo "\n".$myarray[$rand];

// Associative array
$keyArray = array('a' =>12 , 'b' => 13, 'f' => 14, 'd' => 15, 'c' => -11 );

// its problem creates
// shuffle($keyArray);
print_r($keyArray);

$key = array_rand($keyArray);
print_r($key);
echo "\n".$keyArray[$key];