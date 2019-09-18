
<?php
$numbers = array(1,'22',11,3,444,4,44,22,3);
$keyArray = array('a' =>12 , 'b' => 13, 'f' => 14, 'd' => 15, 'c' => -11 );

// item exist

if (in_array(22,$numbers,true)){
    echo "22 is exist\n";
    echo array_search(22,$numbers,true).PHP_EOL;
}else{
    "12 is not esit";
}

// key exit

if(key_exists('l',$keyArray)){
    echo "'a' key exit\n";
}else{
    echo "not key exit\n";
}