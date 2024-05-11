<?php
$message = "A quick brown Fox fox jumps over a lazy dog";
$positionOfTheString = strpos($message,"fox"); // For case sensitive

echo "The fox word is at ".$positionOfTheString."th position in the message".PHP_EOL;

$positionOfTheString = stripos($message, "fox"); // For case insensetive
echo "The fox word is at ".$positionOfTheString."th position in the message".PHP_EOL;

$positionOfTheString = strpos($message,"A");
if($positionOfTheString !== false){ // We have to check both value and type
    echo "The searched word was found in the string";
}else{
    echo "The searched word was not found in the string";
}