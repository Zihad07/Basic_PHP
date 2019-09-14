
<?php

$n = 12;
$o = 012;
$h = 0x2B;

printf("The number is %d and %d and %d\n", $n, $o, $h);
printf("The Binary equivalent of %d is %b\n", 121, 121);

printf("The OCtale equibalent %o = %d",0200000, 0200000);
echo "\n";

// swaping

$fname = 'Steve';
$lname = 'Smith';

printf("The name is : %s %s\n",$fname,$lname);
printf('The name is : %2$s %1$s',$fname,$lname);

echo "\n";
printf("%04d\n",1);
printf("%04d\n",12);
printf("%04d\n",123);
printf("%04d\n",11234);

$muNumber = 3.123456;

printf("MyNumber is : %08.2f", $muNumber);