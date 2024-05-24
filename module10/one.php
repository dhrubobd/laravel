<?php

// Given array of random numbers
$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];

// Your Code goes here
function evenNumber($var)
  {
    if(($var>50)&&($var%2==0)){
        return $var;
    }
  
  }
  $numbers = array_filter($randomNumbers,"evenNumber");
  $doubleNumbers = array_map(function($number)
    {
        return $number * 2;
    },$numbers);

print_r($doubleNumbers);
  

?>