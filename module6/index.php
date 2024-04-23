<?php

$name ="Luke K. B. Sarker" ; // Global variable, jekono jaygay kaaj korbe


function myFunctionOne(){
    global $name; // Global Scope
    echo $name;
}

function myFunctionTwo(){
    $age = 42; // Local Scope (functioner vitore sudhu kaaj korbe)
}

myFunctionOne();
myFunctionTwo();
echo phpversion();
?>