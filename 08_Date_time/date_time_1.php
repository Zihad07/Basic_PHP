
<?php

// echo time();
// echo PHP_EOL;
// echo date('d/m/y');
// echo PHP_EOL;
// echo date('D/F/Y');
// echo PHP_EOL;
// echo microtime(true);

$startTime = microtime(true);
factorial(1000);

// make x'second sleep
// sleep(4);
$endTime = microtime(true);

$executionTime = $endTime - $startTime;

printf("%0.8f\n",$executionTime);

function factorial($n){
    $result = 1;
    for($i=1; $i<=$n; $i++){
        $result *= $i;
    }

    return $result;
}
