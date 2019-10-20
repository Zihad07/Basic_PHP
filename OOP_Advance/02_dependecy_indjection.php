<?php 

interface BaseStudent{
    function displayName();
}

class Student implements BaseStudent
{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName()
    {
        echo "Hello Form ".$this->name."\n";
    }
}

class ImporvedStudent implements BaseStudent
{
    # code...
    private $name;
    private $title;

    function __construct($name,$title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName()
    {
        echo "Hello From {$this->title}. {$this->name}\n";
    }
}

class StudentManager
{
    function introduceStudent(BaseStudent $student){
        $student->displayName();
    }
}

$st = new Student("Nahid");
$sm = new StudentManager();

$sm->introduceStudent($st);

$ist = new ImporvedStudent("Nahid","Mr");
$sm->introduceStudent($ist);



?>