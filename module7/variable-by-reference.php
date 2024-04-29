<?php
$name = "Luke";
function greet(&$name){ // Variable by reference 
	$name = "Keya";
	echo "Hi ".$name."\n";
}

greet($name);
echo $name;