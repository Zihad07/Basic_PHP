
<?php

function fibonacci($old, $new, $end){

    static $start;
    // $start = 1;

    $start = $start ?? 1;

    if($start > $end){
        return;
    }

    $start += 1;
    echo $old." ";

    
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old,$new,$end);

}

fibonacci(0,1,10);