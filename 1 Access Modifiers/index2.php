<?php 

class Person{
    private String $name; // the property or method can be accessed from everywhere. This is default
    protected $surname; // the property or method can be accessed within the class and by classes derived from that class
    private $nickname; //the property or method can ONLY be accessed within the class

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function uppercaseName()
    {
        $this->name = ucwords($this->name);
    }

    public function getName() : String
    {
        return $this->name;
    }
}

$user = new Person();
$user->setName("carl");
$user->uppercaseName();
echo $user->getName();