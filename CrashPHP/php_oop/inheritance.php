<?php 

    // Learning Basic Inheritance


    class Fruits{
        private $name;
        private $color;

        public function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function intro(){
            echo "This fruit is {$this->name} and the color is {$this->color}\n";
        }
    }

    // Child Class

    class Strawbery extends Fruits{

        private $weight;

        public function __construct($name,$color,$weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        function intro(){
            echo "\nThis fruit is {$this->name} and the color is {$this->color}, and the weight is {$this->weight} gram\n";
        }
    }


    $strawbery = new Strawbery('Strawbery','red',78);
    // $strawbery->message();
    $strawbery->intro();


?>