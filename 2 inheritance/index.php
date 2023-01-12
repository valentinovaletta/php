<?php 

class Person{

    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    protected function getName(){
        return $this->name;
    }
}

class Customer extends Person{
    public function sayMyName(){
        echo "Hi, ".$this->getname();
    }
}

// $person = new Person("Nick");
// echo $person->getName();

$customer = new Customer("Ivan");
$customer->SayMyName();