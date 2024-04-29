<?php

function getNumbers(){
	$output = [5,16];
	return $output;
}
list($a,$b) = getNumbers();

echo "$a and $b";