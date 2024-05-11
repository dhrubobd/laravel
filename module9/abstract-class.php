<?php
/* abstract methods / functions in abstract class 
 always must be implemented by child class  */

 abstract class Vehicles{
    protected $vehicleName;
    function __construct($vehicleName)
    {
        $this->$vehicleName= $vehicleName;
        echo "I am a {$this->$vehicleName} and ";
        $this->wheels();
    }

    abstract function wheels();

 }

 class Car extends Vehicles{
    function wheels()
    {
        echo "I have 4 wheels".PHP_EOL;
    }
 }

 class Motorcycle extends Vehicles{
    function wheels() 
    {
        echo "I have 2 wheels".PHP_EOL;
    }
 }

 $m1 = new Motorcycle("Harley Davisdson");
 $c1 = new Car("Toyota");

/*  Here wheels() are abstruct funcion / method 
 which child class must implemented */