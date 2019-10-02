<?php

interface BaseAnimal{
    function isAlive();
    function canEat($a,$b);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive()
    {
        
    }

    function canEat($a, $b)
    {
        
    }

    function breed()
    {
        
    }
}

interface BaseHuman extends BaseAnimal{
    public function canTalk();

}

// class Human implements BaseHuman{
//     function canTalk()
//     {
        
//     }

//     function breed()
//     {
        
//     }

//     function canEat($a, $b)
//     {
        
//     }

//     function isAlive()
//     {
        
//     }
// }


// $h = new Human();

// echo $h  instanceof Human.PHP_EOL;
// echo $h  instanceof BaseHuman.PHP_EOL;
// echo $h  instanceof BaseAnimal.PHP_EOL;
// echo $h  instanceof Animal.PHP_EOL;


abstract class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "i am Eating\n";
    }
}

class Human extends AbstractHuman{
    function isAlive()
    {}
    function canEat($param1, $param2)
    {}
    function breed()
    {}
    function canTalk()
    {}
    function run()
    {}
}


