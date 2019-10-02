<?php

class Animal{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n";
    }

    public function run(){
        echo "{$this->name} is running\n";
    }

    public function sleep()
    {
        echo "{$this->name} is sleeping\n";
    }

    public function greet(){}
    
    protected function addTitle($title){
        $this->name = $title. " ".$this->name;
    }
}

// -----------------------------------------------

// Child Class

class Human extends Animal{
    public function greet()
    {
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi\n";
    }
}


class Cat extends Animal{
    public function greet()
    {
        echo "{$this->name} says Meow\n";
    }
}

// -----------------------------------------

$nahid = new Human('Nahid');
$nahid->greet();
$nahid->eat();

$tommy = new Cat('Tommy');
$tommy->greet();
$tommy->run();
$tommy->sleep();