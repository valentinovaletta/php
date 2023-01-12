<?php 

class Person{
    public $name;

    function __construct($name = "Carl")
    {
        $this->name = $name;
    }
    function getName()
    {
        echo $this->name;
    }
}

//$user = new "Person"; // not working
//option 1
$user = new Person("Carl");
$user->getName();
print(PHP_EOL);

//option 2
$class = "Person";
$user1 = new $class("Ivan");
$user1->getName();
print(PHP_EOL);

//option 3
$user3 = new Person("Nick");
$class = "user3";
${$class}->getName();