<?php 

    $person = [
        'name' => 'Sara',
        'id' => '123456',
        'age' => '25',
        'sex' => 'x'
    ];

    function processMaternityLeave($person){
        if($person['age']<18){
            throw new Exception("Too Young");
        }elseif('F'==$person['sex']){
            echo "Processed";
        }else{
            throw new GenderMismatchException($person);
        }
    }

    // custom exception 

    class GenderMismatchException extends Exception{
        private $person;

        public function __construct($person)
        {
            $this->person = $person;
            parent::__construct("Gender Mismatch\n");
        }

        public function getDetailedMessage(){
            echo "Gender Mismatch for Person with ID {$this->person['id']}\n";
        }


    }


    try{
        processMaternityLeave($person);
    }catch(GenderMismatchException $e){
        echo $e->getMessage();
        echo $e->getDetailedMessage();

    }catch(Exception $e){
        echo $e->getMessage();
    }

?>