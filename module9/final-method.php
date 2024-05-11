<?php
/* Parent class e jodi kono final method thake 
tahole child class e oi method override kora jabe na */

class OurClass{
    final function doSomething(){ // This final fuction can't be override on child class MyClass
        echo "Doing Something";
    }
}

class MyClass extends OurClass{
    
}

$mc = new MyClass();
$mc->doSomething();