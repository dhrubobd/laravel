<?php
$message = "A quick brown fox jumps over a lazy dog";
$characterArray = str_split($message);
$characterCount = [];

foreach($characterArray as $char){
    if(isset($characterCount[$char])){
        $characterCount[$char]++;
    }else{
        $characterCount[$char] = 1;
    }
}

print_r($characterCount);