
<?php

class MotorCycle{
    private $parameter;

    function __construct($displacement,$capacity,$mileage)
    {
        $this->parameter = [];
        $this->parameter['mileage'] = $mileage;
        $this->parameter['displacement'] = $displacement;
        $this->parameter['capacity'] = $capacity;
    }

    function __isset($name)
    {
        if(!isset($this->parameter[$name])){
            echo "{$name} not found\n";
            return false;
        }

        return true;
    }

    function __unset($name)
    {
        print_r($this->parameter);
        unset($this->parameter[$name]);
        print_r($this->parameter);
    }

    function __get($name)
    {
        return $this->parameter[$name];
    }

    function __set($name, $value)
    {
        $this->parameter[$name] = $value;
    }
}

// -----------------------------------------------

$pulser = new MotorCycle('250cc', '20ltr','60kmph');

echo $pulser->mileage;
echo "\n";
echo $pulser->displacement;
echo "\n";

if(isset($pulser->tiresize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

unset($pulser->displacement);