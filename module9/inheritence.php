<?php
class ParentClass{
    protected $name;
    protected $age;
    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sayHi();
    }
    private function sayHi(){
        echo "Hi! I'm {$this->name} and I am {$this->age} years old";
    }
}

class ChildClass extends ParentClass{
    
}

$childObject = new ChildClass("Luke",43); 
/* Here child class object is created but as it extends parents class 
it is using parent's class construct method */
