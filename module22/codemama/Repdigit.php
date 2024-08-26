<?php
/*
Repdigit

Problem Statement
Write a program to check whether a number is Repdigit or not. A repdigit is a positive number composed out of the same digit.

Input
The input consists of a positive integer number N

Output
The output will print either "true" or "false".

Constraints
0 ≤ |N| ≤ 10000
Example:
Enter number

Input:
55
Output:
true

*/
//$positiveNumber = 100;
$positiveNumber = 777;
$numberString = strval($positiveNumber);
$repDigit = "true";
    for($i=0;$i<(strlen($numberString)-1);$i++){
        if($numberString[$i]==$numberString[$i+1]){
            $repDigit = "true";
        }else{
            $repDigit = "false";
            break;
        }
    }
    echo $repDigit;
?>