<?php
$x = $y = 5;
echo "For ++ after Variable".PHP_EOL;
$x = $y++; 
/* 
Meaning of the above line is:
$x = $y; 
$y= $y+1; 
*/

echo "X= $x : Y= $y".PHP_EOL;
echo "=====================".PHP_EOL;


$x = $y = 5;
echo "For ++ before Variable".PHP_EOL;
$x = ++$y;

/* 
Meaning of the above line is:
$y= $y+1; 
$x = $y; 
*/
echo "X= $x : Y= $y".PHP_EOL;
echo "=====================".PHP_EOL;



$x = $y = 5;
echo "For -- after Variable".PHP_EOL;
$x = $y--; 
/* 
Meaning of the above line is:
$x = $y; 
$y= $y-1; 
*/

echo "X= $x : Y= $y".PHP_EOL;
echo "=====================".PHP_EOL;

$x = $y = 5;
echo "For -- before Variable".PHP_EOL;
$x = --$y; 
/* 
Meaning of the above line is:
$y= $y-1; 
$x = $y; 
*/

echo "X= $x : Y= $y".PHP_EOL;
echo "=====================".PHP_EOL;