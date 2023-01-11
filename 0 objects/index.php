<?php 

class Person{

    public $name = 'Carl';    

    function getName()
    {
        echo $this->name;
    }
}

//$user = new "Person"; // not working
//option 1
$user = new Person;
var_dump($user);

//option 2
$class = "Person";
$user1 = new $class;
var_dump($user1);

//option 3
$user3 = new Person;
$class = "user3";
${$class}->getName();