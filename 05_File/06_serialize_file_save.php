<?php

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\\f4.txt";

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



// $students to serialize

// $dataSerialize = serialize($students);
// file_put_contents($filePath,$dataSerialize,LOCK_EX);

// Data unseralize and access

$data = file_get_contents($filePath);
$dataUnseralize = unserialize($data);
print_r($dataUnseralize);

// Data Delete

// unset($dataUnseralize[1]);
// $dataSerialize = serialize($dataUnseralize);
// file_put_contents($filePath,$dataSerialize);

// New Data add


// array_push($dataUnseralize,$newStudent);
// file_put_contents($filePath,serialize($dataUnseralize));
