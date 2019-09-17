
<?php

// Crate Associative array

$foods = [
    'vegetables' => "brinjal, brocolli, carrot, capsicam",
    "fruits" => "orange, banana, apple",
    'drinks' => "water, milk"
];

echo $foods['drinks'];

// foreach ($foods as $key => $value) {
//     echo $key."=".$value."\n";
// }

$keys = array_keys($foods);
// print_r($keys);
// $values = array_values($foods);
// print_r($values);

// new key and value add
// $foods["hi"] = "Nothing";

// update value

// $foods['drinks'].= ", coke";

// for($i=0; $i<count($keys); $i++){
//     echo $foods[$keys[$i]]."\n";
// }


print_r($foods);
// Delete Element

unset($foods['drinks']);

print_r($foods);

unset($foods['drinks']);
//  0-> no keys , 1->has key
printf("%d\n", array_key_exists('drinks',$foods));
