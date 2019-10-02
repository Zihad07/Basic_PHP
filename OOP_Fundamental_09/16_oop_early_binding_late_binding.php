<?php

class Planet{
    static function echoName(){
        // early bindin
        // it calls its getName() method not child override method
        // echo self::getName();

        // late binding
        // it call it child overide method,if not override method in child
        // then it calls it owns method.
        echo static::getName();
    }

    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet {
    static function getName()
    {
        return "Earth";
    }
}


$earth = new Earth();
echo $earth->getName().PHP_EOL;
echo $earth->echoName();
