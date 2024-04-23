<?php

printf("Binary equivalant of %d is %b \n",12,12);
printf("Octal equivalant of %d is %o \n",12,12);
printf("Hexadecimal equivalant of %d is %X \n",12,12);
printf("Octa %o = %d \n",012,012);

printf('Binary equivalant of %1$d is %1$b',12);

echo "\n";
$n = 123; // We want to show it as 0123
$m = 34;  // We want to show it as 0034

printf("%04d \n",$n);
printf("%04d \n",$m);

$o = 122.456; //We want to show it as 0122.45 (total 7 character with point)
$p = 23.345; //We want to show it as 0023.34 (total 7 character with point)

printf("%07.2f \n",$o);
printf("%07.2f \n",$p);

//sprintf retuns value
$output = sprintf("%07.2f and %07.2f \n",$o, $p);
echo $output;

