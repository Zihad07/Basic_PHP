<?php

class Color {
    public $color;

    function __construct($color)
    {
        $this->color = $color;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __toString()
    {
        return "This is {$this->color} color\n";
    }

}

$catColor = new Color('white');

echo $catColor;