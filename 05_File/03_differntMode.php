<?php

$filePath = "\Users\zzzzz\Desktop\BasicPHP\\05_File\Data_files\\f2.txt";

    //--------------------------------
    //  "r+" mode
    // $file= fopen($filePath,"r+");

    // // while($line = fgets($file)){
    // //     echo $line;
    // // }

    // $line = fgets($file);
    // echo $line;

    // // rewind($file);

    // fwrite($file,"mr");
    // // rewind($file);
    // $line = fgets($file);
    // echo $line;
    //--------------------------------

    // "w+" mode
    // $file= fopen($filePath,"w+");
    
    // rewind($file);
    // while($line = fgets($file)){
    //     echo $line;
    // }

    // $line = fgets($file);
    // echo $line;

    // rewind($file);

    // fwrite($file,"mr");
    // // rewind($file);
    // $line = fgets($file);
    // echo $line;


    //--------------------------------

    // "w+" mode
    $file= fopen($filePath,"a+");
    
    // rewind($file);
    // while($line = fgets($file)){
    //     echo $line;
    // }

    // $line = fgets($file);
    // echo $line;
    // $line = fgets($file);
    // echo $line;

    // echo fgets($file);
    // echo fgets($file);
    // echo fgets($file);
    // rewind($file);
    // echo "\n";
    // echo fgets($file);
    

    // rewind($file);

    // fwrite($file,"mr");
    // // rewind($file);
    // $line = fgets($file);
    // echo $line;

    // rewind($file);
    fwrite($file,"Hi how are you?\n");
    rewind($file);
    while($line =fgets($file)){
        echo $line;
    }
    fwrite($file,"Notheing\n");
    



   
