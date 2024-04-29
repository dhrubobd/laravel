<?php 
$mathMarks =[
	'John'=>85,
	'Tom'=>89,
	'Harry'=>55,
	'Mary'=>95,
];

function getGrade($mark){
    return $mark>=90?"A":($mark>=80?"B":($mark>=70?"C":($mark>=60?"D":($mark>=50?"E":"F"))));
}

foreach ($mathMarks as $student => $mark) {
    $grade = getGrade($mark);
    echo "$student got $grade".PHP_EOL;
}