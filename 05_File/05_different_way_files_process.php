<?php

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\\f3.txt";

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

// print_r($students);

// File write mode
// $fw = fopen($filePath,"w");

// foreach ($students as $eachData) {
//     // print_r($eachData);
//     fputcsv($fw,$eachData);
// }

// each data read

// fclose($fw);

// File open read
$fr = fopen($filePath,'r');

while ($student = fgetcsv($fr)){
    // print_r($student);
    printf("Name:%s\nEmail:%s\nGender:%s\n\n",$student[0],$student[1],$student[2]);
}

fclose($fr);


// Delete some file


// $data = file($filePath);
// unset($data[1]);

// $fw = fopen($filePath,'w');

// foreach ($data as $line) {
//     fwrite($fw,$line);
// }
// print_r()