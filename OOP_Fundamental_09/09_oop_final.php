<?php

class Myclass{
    // so you can't override in child class.
   final function do(){
        echo "Do Something\n";
    }
}

class Child extends Myclass{

    // overide
    // function do(){
    //     echo "Do Child Nothing\n";
    // }
}

$ob = new Child();
$ob->do();