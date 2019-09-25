<?php

use function PHPSTORM_META\type;

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\mytext_01.txt";

if(is_readable($filePath)){

    // $filePath = "\Users\zzzzz\Desktop\BasicPHP\05_File\Data_files\mytext_01.txt";
    // $filePath = str_replace("\\","/",$filePath);
    // echo $filePath.PHP_EOL;
    // echo getcwd();

    // file open
    $fp = fopen($filePath,'r');

    // $line = fgets($fp);
    // echo $line;
    // $line = fgets($fp);
    // echo $line;


    while($line = fgets($fp)){
        echo $line;
    }
    echo PHP_EOL;
    // rewind($fp);
    // again print
    // while($line = fgets($fp)){
    //     echo $line;
    // }



    // at the end file close
    fclose($fp);

    // on at a time all file read in array way.

    $data = file($filePath);
    print_r($data);
    echo $data[5]."\n\n";

    $data = file_get_contents($filePath);
    // echo var_dump($data).PHP_EOL;
    echo $data;
    }