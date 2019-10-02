
<?php

class RGB{

    private $color; // #00ff00
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = "")
    {
        $this->color = trim($colorCode,"# \n\t");
        // create value each color
        $this->parseColor();
    }

    public function getColor(){
        return $this->color;
    }

    public function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }

    public function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
        echo "--------------------\n";

    }

    public function setColor($colorCode){
        $this->color = trim($colorCode, "# \n\t");
        $this -> parseColor();
    }

    // main work

    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue) = sscanf($this->color,"%02x%02x%02x");
        }else{
            list($this->red, $this->green, $this->blue) = array(0,0,0);

        }
    }

    // Return Indivisual color
    public function getRed(){ return $this->red;}
    public function getGreen(){ return $this->green;}
    public function getBlue(){ return $this->blue;}
}

// ----------------------------------------------------

$myColor = new RGB("  #ffffff   ");
$myColor -> readRGBColor();
$myColor->setColor("#fffaaa");
$myColor->readRGBColor();
echo $myColor->getBlue().PHP_EOL;

$myColor = new RGB("   \n\t adfljl afjll   ");
$myColor-> readRGBColor();

$noneColor = new RGB();
$noneColor->readRGBColor();