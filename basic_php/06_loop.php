
<?php

for ($i=0; $i <= 10; $i++) { 
  echo "$i";
  echo PHP_EOL;
}

// printf("\n-----------------------\n");
// $number = 1;
// while ($number <= 10){
//     printf("%d, " ,$number);
//     $number += 2;
// }


printf("---------------------------\n");


// do{
//     echo "Do while".PHP_EOL;
// }while(FALSE);

// do {
// echo "Hello".PHP_EOL;
// }while('1');

// Multiple stepping
// echo PHP_EOL;

// for ($i=10, $j = 1; $i > 0 ; $i--, $j++) { 
//   # code...
//   echo $i.":".$j.PHP_EOL;
// }

// Determinde Factorial

$n = $value = 0;
$result = 1;

while($n>1):
  $result *= $n--;

endwhile;

echo PHP_EOL;
echo "The {$value}! = {$result}".PHP_EOL;
?>