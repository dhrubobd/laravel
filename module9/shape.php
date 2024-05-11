<?php
class Shape{
    protected $name, $area;
   function __construct($shapeName)
   {
    $this->name = $shapeName;
    echo "This {$this->name}'s area is {$this->area}".PHP_EOL;
   }

}

class Rectangle extends Shape{
    private $width,$height;
    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this -> calculateArea();
        parent::__construct("Rectangle");
    }
    private function calculateArea(){
        $this->area = $this->width * $this->height;
    }

}
class Triangle extends Shape{
    private $base, $height;
    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
        $this->calculateArea();
        parent::__construct("Triangle");
    }
    private function calculateArea(){
        $this->area = 0.5 * $this->base * $this->height;
    }
}

$r1 = new Rectangle(58,30);
$t1 = new Triangle(34,56);

/* 
Note: Here area is a protected variable which can be used
in child classes 

*/