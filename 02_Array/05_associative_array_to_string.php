
<?php

$men = array(
    'name' => 'nahid',
    'email' => 'nahid@123gmail.com',
    'age' => 25,
    'profession' => 'Strudent',

);

/**
* For string convert we user
* serialize or json_ecode
*For convert associatve array we use
* unserialize or json_decode
*/

print_r($men);

// $serialize = serialize($men);
// echo $serialize.PHP_EOL;

// $unserialize = unserialize($serialize);
// print_r($unserialize);

// JSON

$jsonData = json_encode($men);
echo $jsonData."\n";

$jsonDataDecode = json_decode($jsonData,true);
print_r($jsonDataDecode);
