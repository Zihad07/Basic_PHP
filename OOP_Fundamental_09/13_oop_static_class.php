<?php

class A {
    // private static $name;

    static $number_class = 0;

    public function __construct()
    {
        self::$number_class += 1;
    }

    const PI = 3221;
    protected static $name;
    static function sayHi(){
        self::$name = "Hellow\n";
        echo "Hi from A\n";
    }
}

class B extends A {
    static function sayHi()
    {
        parent::sayHi();
        echo parent::$name;
        echo "Hi from B\n";
        // parent::sayHi();
    }
}

B::sayHi();
// echo B::$name;
echo B::PI."\n";

echo A::PI;

$a = new A();
$b = new A();

// echo "\nthis number of class B created ".B::$number_class;
// echo "\nthis number of class A created ".A::$number_class;
