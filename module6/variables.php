<?php
//Checking Variable Types and lengh with var_dump function
/* This values could be 
1.String
2. Integer
3. Float 
4. Boolean 
5. NULL 
6. Array 
7. Object 
8. Resource  */

$theStringVariable = "Abc";
$theStringVariable2 = '123';
$theIntegerVariable = 123;
$theFloatVariable = 12.50;
$theNullVariable = null;
$theBooleanVariable = true;
echo "\n::::::::::::::::::::::::::\n";
var_dump($theStringVariable, 
    $theStringVariable2, 
    $theIntegerVariable, 
    $theFloatVariable, 
    $theNullVariable,
    $theBooleanVariable
);
echo "\n::::::::::::::::::::::::::\n";
// Variable in echo 

$name = "Earth";

echo "We're living on {$name} by default";
echo "\n::::::::::::::::::::::::::\n";
//Alternatively write with single quatation like followings
echo 'We\'re living on '.$name.' by default';

// Using printf

$fName = "Luke";
$lName = "Sarker";
$theNationality ="Bangladeshi";
echo "\n::::::::::::::::::::::::::\n";
printf("My name is %s %s and I'm a %s",$fName, $lName, $theNationality);
echo "\n::::::::::::::::::::::::::\n";
printf("My %s name is %s %s and I'm a %s","full",$fName,$lName,strtoupper($theNationality));