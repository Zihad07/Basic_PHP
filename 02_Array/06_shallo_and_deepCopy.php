<?php 

$person = array("fname"=>"Hello", "lname"=>"world");

// DeepCopy/CopyValue
$newPerson = $person;

// Shallow copy / reference copy
// $newPerson = &$person;

$person['fname'] = "pluto";

// print_r($person);
// print_r($newPerson);


function CopyArray($person){ // Deep copy
// function CopyArray(&$person){ // shallow copy
    $person['fname'] = 'alex';
    print_r($person);
}

CopyArray($person);

print_r($person);