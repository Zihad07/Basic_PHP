<?php

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\\f2.txt";

if(is_writable($filePath)){
    $fw = fopen($filePath,"w");


    // fwrite($fw,"Hello\n");
    fwrite($fw,"How\n");
    fwrite($fw,"are\n");
    fwrite($fw,"you?\n");

    fclose($fw);

    print_r(file($filePath));
}