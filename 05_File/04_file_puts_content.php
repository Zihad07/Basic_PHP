<?php

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\\f2.txt";

file_put_contents($filePath,"):\n",FILE_APPEND | LOCK_EX);
file_put_contents($filePath,":)\n",FILE_APPEND | LOCK_EX);

print_r(file($filePath));

// echo is_writable($filePath)."\n";
// echo is_readable($filePath)."\n";
