
<?php

function recursive($x){
    if($x > 10){
        return;
    }

    printf("%d\n",$x);

    recursive(++$x);
}

// recursive(1);

function printNumber($counter, $end, $stepping = 1){

    if($counter > $end){
        return;
    }

    printf("%d, ",$counter);
    $counter += $stepping;

    printNumber($counter, $end, $stepping);
}

// printNumber(20,30,5);