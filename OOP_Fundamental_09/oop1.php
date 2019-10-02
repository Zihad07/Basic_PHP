
<?php
    // echo  "hello world";

    class Human{
        public $name;

        function sayHi(){
            echo "Salam\n";
        }

        function sayName(){
            echo "my name is".$this->name."\n";
        }
    }

    class Cat{
        function sayHi(){
            echo "Meow\n";
        }
    }

    class Dog{
        function sayHi(){
            echo "Woof\n";
        }
    }

    // obvject Declare
    $h1 = new Human();
    $h2 = new Cat();
    $h3 = new Dog();

    $h1->name = 'Nayem';
    $h2->name = "Hellow";

    echo $h1->name."\n";
    echo $h2->name."\n";

    $h1->sayHi();
    $h2->sayHi();
    $h1->sayName();
