<?php
$message = "A quick brown fox jumps over a lazy dog";

$replacedString = str_replace("brown","red",$message);

echo $replacedString.PHP_EOL;

echo "::::: Case Insensetive ::::::".PHP_EOL;

$replacedString = str_ireplace("Brown","red",$message); 
echo $replacedString.PHP_EOL;

echo "::::: Multiple String Replace ::::::".PHP_EOL;

$replacedString = str_replace(array("brown","fox"),array("red","bird"),$message);
echo $replacedString.PHP_EOL;

echo "::::: Count how many string replace ::::::".PHP_EOL;
$replacedString = str_replace(array("brown","fox"),array("red","bird"),$message,$count);
echo "{$count} words are replaced";

