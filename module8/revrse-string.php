<?php
$message = "A quick brown fox jumps over a lazy dog";
$length = strlen($message);
for($i=$length-1; $i>=0; $i--){
    $newString .= $message[$i];
}
echo $newString.PHP_EOL;

echo ":::::::::: Second Way ::::::::::::".PHP_EOL;
echo strrev($message).PHP_EOL;