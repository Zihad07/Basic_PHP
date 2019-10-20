<?php 

// This the bad idea
// class FileDisplay{
//     function display($file,$fileType){
//         if('mp4'==$fileType){
//             // display video player
//         }elseif('mp3'==$fileType){
//             // display audio player
//         }else{
//             // display text file
//         }
//     }

// }

class FileDisplay{
    function display(FileInterface $file){
        $file->display();
    }
}

interface FileInterface{
    function display();
}

class ImageFile implements FileInterface{
    function display()
    {
        // take necessary steps to display image
    }
}

class VideoFile implements FileInterface
{
    function display()
    {
        // take neccessary steps to display video player 
    }
}

class AudioFile implements FileInterface{
    function display()
    {
        // take neccessary steps to display audio player
    }
}

$image = new ImageFile('abc.jpg');
$vidoe = new VideoFile('abc.mp4');
$audio = new AudioFile('abc.mp3');

$fd = new FileDisplay();
$fd->display($image);
$fd->display($vidoe);
$fd->display($audio);



?>