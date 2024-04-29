<?php
//For Loop
for($i=1;$i<=10;$i+=1){
    echo $i;
    echo PHP_EOL; // Line Break
}

for($i=1; $i <=12; $i++){
    for($k=$i;$k<12;$k++){
        echo " ";
    }
    for ($j=1; $j <= $i ; $j++) { 
        echo "* ";
    }
    echo PHP_EOL;
}
for ($i=1; $i <= 4; $i++) { 
    echo "         * * *".PHP_EOL;
}

// While Loop

/* $i = 1;
while ($i <= 10) {
    echo $i.PHP_EOL;
    $i++;
} */

$i = 12;
while ($i >= 1) {
    $k=$i;
    while($k<12){
        echo " ";
        $k++;
    }
    $j=1;
    while($j<=$i){
        echo "* ";
        $j++;
    }
    echo PHP_EOL;
    $i--;
}


//Do while loop

$i =1;
do{
    echo $i.PHP_EOL;
    $i++;
}while($i<=10);

// Loop using Go to
$i=0;
a: $i++;
echo $i.PHP_EOL;
if($i<=10){
    goto a;
}

// Multiple Assignment Using For Loop
echo "Multiple Assignment Using For Loop".PHP_EOL;
for($i=1,$j=10;$i<=10;$i++,$j--){
    echo $i.":".$j.PHP_EOL;
}