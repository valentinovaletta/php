<?php 

abstract class Person{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    protected function getName():string
    {
        return $this->name;
    }
    abstract protected function sayHello():string;
}

class Customer extends Person{
    public function sayHello():string
    {
        return "Hello Mr. Customer ".$this->getName();
    }
}

class User extends Person{
    public function sayHello():string
    {
        return "Hello Mrs. User ".$this->getName();
    }
}

// $person = new Person();

$customer = new Customer("Ivan");
echo $customer->sayHello();

print(PHP_EOL);

$user = new User("Ivanka");
echo $user->sayHello();
