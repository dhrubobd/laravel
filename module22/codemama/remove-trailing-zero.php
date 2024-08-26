<?php
/*
Remove Trailing Zeroes

Problem Statement
Write a program that takes in a number as a string S and returns the number without trailing zeros. Trailing zeroes before decimal point has importance , so they will not be removed. Only the trailing zeroes after decimal point which does not have any importance will be removed.

Input
The input consists of a string S

Output
The output will print a number without trailing zeroes.

Constraints
0 ≤ |S| ≤ 10000
Example:
Enter number

Input:
505.4500
Output:
505.45

*/
    # Write your PHP code from here
    //fscanf(STDIN,'%s',$numberString);
    //echo strlen($numberString);
    $numberString = "100.50";
    $pointCheck = 0;
    for($i=0;$i<strlen($numberString);$i++){
        if($numberString[$i]=="."){
            $pointCheck = 1;
            break;
        }
    }
    $j=0;
    if($pointCheck==1){
        for($i=(strlen($numberString)-1);$i>=0;$i--){
            if($numberString[$i]=="0"){
                $j++;
            }else{
                break;
            }
        }
        $newString = "";
        if($j>=1){
            for($i=0;$i<(strlen($numberString)-$j);$i++){
                $newString .= $numberString[$i];
            }
            echo $newString;
        }else{
            echo $numberString;
        }
    }else{
        echo $numberString;
    }
?>