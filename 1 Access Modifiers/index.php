<?php 

class Person{
    public $name; // the property or method can be accessed from everywhere. This is default
    protected $surname; // the property or method can be accessed within the class and by classes derived from that class
    private $nickname; //the property or method can ONLY be accessed within the class

    public function uppercaseName()
    {
        $this->name = ucwords($this->name);
    }

    public function getName()
    {
        echo $this->name;
    }
}

$user = new Person();

echo $user->name;
print(PHP_EOL);

$user->name = "carl";
echo $user->name;

// $user->surname = "Ivan";
// $user->nickname = "Nick";

print(PHP_EOL);

$user->name = [123,123,123];
$user->uppercaseName();
echo $user->name;


