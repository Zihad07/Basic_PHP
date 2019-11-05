
<?php 
    abstract class Car {

        protected $name;
        function __construct($name)
        {
            $this->name = $name;
        }

        abstract function intro(): string;
    
    }

    // Child class

    class Audi extends Car{
        function intro(): string
        {
            return "Choose German quality! I'm an $this->name\n";
        }
    }

    class Volvo extends Car{
        function intro(): string
        {
            return "Proud to be Swedish! I'am a $this->name\n";
        }
    }

    
    // Create object

    $audi = new Audi('Audi');
    echo $audi->intro();

    $volvo = new Volvo('Volvo');
    echo $volvo->intro();

?>