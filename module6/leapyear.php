<?php
/* Leap Year Conditions

The year is multiple of 400.
The year is a multiple of 4 and not a multiple of 100.

*/

$theYear = 1904;

$result = $theYear%400==0 ? "Leap Year" : (($theYear%100!=0)&&($theYear%4==0)?"Leap Year" : "Not Leap Year");

echo $result;
