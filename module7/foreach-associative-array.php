<?php
echo "Foreach Loop for Associative Array".PHP_EOL;
echo "::::::::::::::::::::::::::::::::::".PHP_EOL;
$countries = [                    //This is an associative array
    'Bangladesh'=>"Dhaka",
    'India'=>"New Delhi",
    'Chaina'=>"Beijing",
    'Japan'=>"Tokyo"
    ];

    foreach($countries as $country=>$capital){
        echo "Capital of $country is $capital \n";
    }

    echo "Foreach Loop for Multidimentional Associative Array".PHP_EOL;
    echo ":::::::::::::::::::::::::::::::::::::::::::::::::::".PHP_EOL;

$studentMarks =[
    'Tom' => [
            'Bangla'=>40,
            'English'=>50,
            'Math'=>60,
    ],
    'Dik' => [
        'Bangla'=>70,
        'English'=>80,
        'Math'=>70,
    ],
    'Mary' => [
        'Bangla'=>50,
        'English'=>90,
        'Math'=>60,
    ]
];

foreach ($studentMarks as $student => $subjects) {
    $totalMarks = 0;
    foreach ($subjects as $subject => $mark) {
        $totalMarks = $totalMarks + $mark;
    }
    echo "$student gets total $totalMarks marks".PHP_EOL;
}
