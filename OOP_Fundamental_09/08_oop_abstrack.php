
<?php

abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{
    private $base, $height;

    function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height= $height;
    }

    public function getArea(){ return $this->height*$this->base;}

    public function getPerimeter()
    {
        
    }
}


class Triangle extends Shape{
    // Nothing

    public function getPerimeter()
    {
        
    }

    public function getArea()
    {
        
    }
}

$rectangle = new Rectangle(12,12);
echo $rectangle->getArea();