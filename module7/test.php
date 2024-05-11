<?php
$word = "abcdefd";
$ch = "d";
$theOutput = reversePrefix($word,$ch);
function reversePrefix($word, $ch) {
    $theArray = str_split($word);
    for($i=0;$i<sizeof($theArray);$i++){
        if($theArray[$i]==$ch){
            break;
        }
    }
    $beginingPart = [];
    for($j=$i;$j>=0;$j--){
       array_push($beginingPart,$theArray[$j]);
       //printf($theArray[$j]);
    }
    $endingPart = [];
    for($j=$i+1;$j<sizeof($theArray);$j++){
        array_push($endingPart,$theArray[$j]);
    }
    $returnValue = implode("",$beginingPart);
    $returnValue .= implode("",$endingPart);
    return $returnValue;
}
printf ($theOutput);

?>