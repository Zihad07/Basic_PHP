<?php
$veryOld = 0;
$old = 0;
$new = 1;

$term = 10;
while($term--){
    
    printf("%d, \n",$veryOld);
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
   

    echo "old = {$old}".PHP_EOL;
    echo "new = {$old}".PHP_EOL;
    echo "---------------".PHP_EOL;

}
?>