<?php

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\\f5.txt";

$students = array(
    array(
        'name' => 'Nahid Hasan',
        'eamil' => 'nahid@gmail.com',
        'gender' => 'male'
    ),
    array(
        'name' => 'Kamrul Hasan',
        'eamil' => 'kamrul@gmail.com',
        'gender' => 'male'
    ),
    array(
        'name' => 'Sara',
        'eamil' => 'sara12d@gmail.com',
        'gender' => 'female'
    ),
);

$newStudent = array(
    'name' => "New Man",
    'email' => 'new@gmail.com',
    'gender' => 'male'
);


// arraty to json

$jsonData = json_encode($students);

// echo $jsonData;
// jsonData put in file

// file_put_contents($filePath,$jsonData,LOCK_EX);

// Read Data from file

$dataFile = file_get_contents($filePath);
// echo $filePath;

$jsonEncode = json_decode($dataFile,true);
print_r($jsonEncode);

// New Data add
// array_push($jsonEncode,$newStudent);
// file_put_contents($filePath,json_encode($jsonEncode));