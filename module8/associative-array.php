<?php 
$person =[
	"name"=>'Luke',
	"age"=>'34',
	"city"=>'Borishal'
];

foreach($person as $key => $value){
	echo "$key : $value".PHP_EOL;
}

// Multi Dimensional Associative Array


$students =[
[
	"name"=>'Luke',
	"age"=>'34',
	"city"=>'Borishal'
],
[
	"name"=>'Harry',
	"age"=>'24',
	"city"=>'Brisbane'
],
[
	"name"=>'Jerry',
	"age"=>'44',
	"city"=>'Amsterdam'
]
];

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo $key." : ".$value.PHP_EOL;
    }   
}