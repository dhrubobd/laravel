<?php
/* We can pass unlimited arguments to a PHP Function 
To do it we have to declare the function like below */

function addNumbers(int ...$n):int{ //int ...$n means unlimited integer parameters
    $result = 0;
    foreach ($n as $value) {
        $result = $result + $value;
    }
    return $result;
}

echo "First Calculated Value is ".addNumbers(3, 4, 6, 20).PHP_EOL; // Here arguments number are not fixed 
echo "::::::::::::::::::::::::::::".PHP_EOL;
echo "Second Calculated Value is ".addNumbers(9, 5, 6, 40, 20).PHP_EOL; // Here arguments number are not fixed 
