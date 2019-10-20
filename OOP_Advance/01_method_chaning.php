
<?php 
class StringUtility{
    private $string;
    private $serach;

    function __construct($string)
    {
        $this->string = $string;
    }

    function search($string){
        $this->search = $string;
        return $this; 
    }

    function replace($string){
        if(!isset($this->search)){
            throw new Exception("Nothing To replace");
        }

        $this->string = str_replace($this->search,$string,$this->string);
        $this->search="";
        return $this;
    }

    function upperCasse(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    function lowerCase(){
        $this->string=strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }


    
 
}

// -------------------------------------
// object create

$ob = new StringUtility("I am Bangladesh");
$ob->print();
echo "\n";
$ob->search("I")->replace("You")->search("am")->replace("are")->upperCasse()->lowerCase()->print();

?>