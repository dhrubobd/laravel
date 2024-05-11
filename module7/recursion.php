<?php 
// Je function nejei nijeke call kore seta recursive function
// Ei function e breaking condition age set kore nite hobe, na hole infinite loop e pore jete pare

function printNumbers(int $n){
    if($n>10){ // Breaking condition set kore nilam
        return;
    }
    $n = $n + 1;
    echo $n.PHP_EOL;
    $n++;
    printNumbers($n); // recursive function
}

printNumbers(0);