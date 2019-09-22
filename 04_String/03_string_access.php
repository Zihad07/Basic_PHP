<?php

$string = "Hello word";

echo $string[0].PHP_EOL;
echo $string[-1].PHP_EOL;

// substring access
echo substr($string,0,5).PHP_EOL;
echo substr($string,6,4).PHP_EOL;
// last 4word access
echo substr($string,-4).PHP_EOL;
echo substr($string,strlen($string)-4).PHP_EOL;

// last 4word in first two word
echo substr($string,-4,2).PHP_EOL;

echo "String Reverse\n";
// String reverse
$strLength = strlen($string); 
echo $strLength.PHP_EOL;;
for($i=1;$i<=$strLength;$i++){
    echo $string[$i*-1];
}
echo PHP_EOL;

// another way
echo strrev($string).PHP_EOL;
echo "-------------------\n";

// Each word revers

$wordList = explode(' ',$string);

foreach ($wordList as $word) {
    echo strrev($word).PHP_EOL;
}

