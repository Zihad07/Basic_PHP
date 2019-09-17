<?php

/**
* Array element print function
*/

function arrayPrint($students){
    $len = count($students);

    echo  "The type of : ".gettype($students)."\n";

    echo "The array length : ".$len."\n";

    for($index=0; $index < $len; $index++){
        echo $students[$index]."\n";
    }
}

// array declare

$students = [
    'karim',
    'rafiq',
    'javed',
    'rafi'
];

// arrayPrint($students);

/**
* Array Basic Function
01- array_push(array_name,data)
02- array_unshift(array_name, data)
03- array_pop(array_name)
04- array_shift(array_name)
*/

// $student = array_pop($students);
// echo "pop-> ".$student."\n";
// echo "---------------------\n";
// arrayPrint($students);


// $student = array_shift($students);
// echo "shift-> ".$student."\n";
// echo "---------------------\n";
// arrayPrint($students);

// array_push($students,"new Data");
// array_push($students,"another new Data");
// $students[] = 'alterantive push';
// echo "push->\n";
// echo "---------------------\n";
// arrayPrint($students);

// array_unshift($students,"1-new Data");
// array_unshift($students,"2-another new Data");
// echo "shift->\n";
// echo "---------------------\n";
// arrayPrint($students);

