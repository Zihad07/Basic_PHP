<?php
// print_r($_COOKIE['array']);
foreach( $_COOKIE['array'] as $key=>$value){
    echo $key."=>".$value."\n";
}
echo $_COOKIE['active'];