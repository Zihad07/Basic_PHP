<?php


$string = "Quick brown Brown Fox fox jumps over the lazy dog";

// $string = str_replace("brown","Brown",$string);
// $string = str_replace("Brown","brown",$string);
// case insentive
// $string = str_ireplace("fox","foxy",$string);

// multiple item replace
$string = str_ireplace(array('brown','fox','dog'),array('BROWN','FOX','DOG'),$string);
// replace by one word
$string = str_ireplace(array('brown','fox','dog'),'(One-word)',$string);
echo $string;