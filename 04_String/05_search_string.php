<?php

$string = "Quick brown Fox fox jumps over the lazy fox";

$offset = strpos($string,'fox');
$offset = strpos($string,'Fox');
// case insentive
$offset = stripos($string,'fox');

// last thekea search
$offset = strrpos($string,'Fox');

$offset = strrpos($string,'Quick');

echo $offset.PHP_EOL;

if($offset !== false){
    echo "wrod found";
}else{
    echo "word not found";
}