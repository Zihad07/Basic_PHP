<?php

// Crate Associative array
// 2d array.

$foods = [
    'vegetables' => explode(", ","brinjal, brocolli, carrot, capsicam"),
    "fruits" => explode(", ","orange, banana, apple"),
    'drinks' => explode(", ","water, milk")
];

print_r($foods);

echo $foods['fruits'][0];