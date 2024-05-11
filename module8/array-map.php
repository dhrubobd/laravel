<?php
$numbers = [3,4,7,5,20];
$doubleNumbers = array_map(function($number){
    return $number * 2;
},$numbers);

print_r($doubleNumbers);