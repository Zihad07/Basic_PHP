
<?php 

$numbers = array(3,4,51,3,4,6,7,4,6,7,8,2);


$students = array('nahid','niloy','akash','nukol','naila','akbar');

function square($x){
    echo "The squre of {$x} is : ".$x*$x."\n";
}

function cuve($x){
    return $x*$x*$x;
}

function even($x){
    return $x % 2 == 0;
}

function odd($x){
    return $x % 2 != 0;
}

function sFilter($name){
    return ($name[0] == 'n' || $name[0] == 'N');
}

function arraySum($oldValue, $newValue){
    // return $oldValue + $newValue;

    if($newValue % 2 == 1){
        return $oldValue + $newValue;
    }
    return $oldValue;
}

// Array walk

// array_walk($numbers,'square');

$cuve = array_map('cuve', $numbers);
// print_r($cuve);

$even = array_filter($numbers,'even');
$odd = array_filter($numbers,'odd');

// print_r($even);
// print_r($odd);

$sStartName = array_filter($students,'sFilter');

print_r($sStartName);


// Array Reduce 
$numbers1 = array(1,2,3,4,5);
$arraySum = array_reduce($numbers1,'arraySum');
echo $arraySum;