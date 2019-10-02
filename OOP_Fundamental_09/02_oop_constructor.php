<?php

    class Person{

        private $name;
        private $email;
        private $password;

        function __construct($name, $email, $password)
        {   
            echo "New Objec Created\n\n";
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            
        }

        public function personInfo()
        {
        
            printf("Name : %s\n",$this->name);
            printf("Email : %s\n",$this->email);
            printf("Name : %s\n",$this->password);
        }
    }

    // Create person object

    $ob = new Person('Nahid','Nahid@gmail.com','3434');
    $ob->personInfo();
    $ob = new Person('Akash','akash@gmail.com','3232');
    $ob->personInfo();

