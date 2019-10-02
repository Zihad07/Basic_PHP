<?php

class Student {
    private $name, $age, $class;

    function __construct($name="",$age ="", $class="")
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // magic method
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

        // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name = $name;
    // }
    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }
    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class){
    //     $this->class = $class;
    // }
}

$ob = new Student('Nahid','24','14');

// echo $ob->name;
// echo $ob->age;

$ob->name = 'Halim';
echo $ob->name;