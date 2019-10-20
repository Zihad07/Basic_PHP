<?php 

define("PATH",__DIR__);

interface BaseStorage{
    function setFileName($fn);
    function writeData($fn);
    function setMode($fn);
}


class Storage implements BaseStorage{
    private $fn;
    private $mode;

    function __construct($fn, $mode = null)
    {
        $this->setFileName($fn);
        $this->mode = $mode;
    }

    function setFileName($fn){
        $this->fn = $fn;
    }

    function writeData($data){
        file_put_contents($this->fn,$data,$this->mode);
    }

    function setMode($mode){
        $this->mode = $mode;
    }
}

class DataManager{
    function saveData(BaseStorage $storage,$data){
        $storage->writeData($data);
    }
}

// echo PATH;

$file = new Storage(PATH."/abc.txt");
$file->setMode(FILE_APPEND);

$dm = new DataManager();

$dm->saveData($file,"01-Hi how are you\n");
$dm->saveData($file,"02Hi how are you\n");
$dm->saveData($file,"03Hi how are you\n");

?>