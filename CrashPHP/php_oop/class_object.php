<?php 
    class Fruits{

        // Properties

        private $name;
        private $color;

        function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        // methods
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            // echo "Hi\n";
            return $this->name;
        }

        function get_color(){ return $this->color;}
    }


    $apple = new Fruits('Apple','red-green');
    $banana = new Fruits('Banana','yellow');

    // $apple->set_name('Apple');
    // $banana->set_name('Banana');

    echo $apple->get_name();
    echo "\n";
    echo $banana->get_name();

    

?>