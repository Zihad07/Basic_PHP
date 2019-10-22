<?php 

function a($x){
    echo $x."\n";
    // print_r(debug_backtrace());
    // debug_print_backtrace();
}

function b($x){
    a($x*2);
}


function c($x){
    b($x*3);
}

c(2);



?>