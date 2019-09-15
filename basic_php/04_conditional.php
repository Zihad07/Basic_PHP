
<?php

$age = 25;

// if(13 <= $age && 19 >= $age){
//     echo "This person is a teenager";
// }else{
//     echo "This is person is not a teenager";
// }

$food = "tuna";

if("tuna" == $food || 'salmon' == $food){
    echo "{$food} has vitamin D";
}elseif('apple' == $food) {
    echo "Apple does't contain vitamin D.";
}else{
    echo "We don't know if {$food} contains vitamin D.";
}

echo "\n";

// Leap year

$year = 2017;
$year = 1900;

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap yaer";
}
else{
    echo "{$year} is not leap year";
}

echo "\n";

// Ternary operator

// $number = 2 > 7 ? 1 : 0;
// echo "$number";
// $mynumber = 11;

// $result = ($mynumber % 2) ? "Odd" : 'Even';
// echo "\n{$result}";



// switch

$number = 4;
$result = $number % 2;

switch($result){
    case 0:
        echo "{$number} is even\n";
        break;
    default:
        echo "Odd number\n";
}

// Determine Vowel and consonent.

$letter = 'p';

switch($letter){
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "{$letter} is a vowel.";
        break;
    default:
        echo "{$letter} is consonant";
}