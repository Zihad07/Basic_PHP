
<?php

class Student{
    function __construct($name,$age)
    {
        $this->name = $name;
        
        if($age < 4){
            throw new Exception("Too Young",1001);
        }

        if ($age > 35) {
            throw new Exception('Too Old',1002);
        }
    }
}


try {
    $st = new Student('Nahid',0);
}catch(Exception $e){
    echo $e->getCode()." : ".$e->getMessage();
}