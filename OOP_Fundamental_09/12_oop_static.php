<?php
class MathCalculator{
    private $number;
    static $name;

    static function fibonaachi($n){
        // not accessable
        // $this->$number = 12;
        // but can acces static variable
        // you can  static method in class
        self::$name = 'hello';
        self::doSomething();
        echo "Fibonachi series up to {$n}\n";
    }

    static function doSomething(){
        echo "Doing Someing\n";
    }

    function factorial($n){
        self::$name = "Abcd";
        self::doSomething();
        $this->number = 12;
        echo "Calculating factorial of {$n}\n";
    }
}

$math = new MathCalculator();
$math->factorial(6);

MathCalculator::fibonaachi(4);

// $math->fibonaachi(3);
