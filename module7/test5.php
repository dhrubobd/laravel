<?php 
function romanToInt($s) {
    $romanString = $s;
    $romanArray = [];
    $romanArray = str_split($romanString);
    $intArray = [];
    foreach($romanArray as $romanNumber){
        if($romanNumber=="I"){
            array_push($intArray,1);
        }elseif($romanNumber=="V"){
            array_push($intArray,5);
        }elseif($romanNumber=="X"){
            array_push($intArray,10);
        }elseif($romanNumber=="L"){
            array_push($intArray,50);
        }elseif($romanNumber=="C"){
            array_push($intArray,100);
        }elseif($romanNumber=="D"){
            array_push($intArray,500);
        }elseif($romanNumber=="M"){
            array_push($intArray,1000);
        }
    }
    $intValue = 0;
    for($i=1;$i<=sizeof($intArray);$i++){
        
            if($intArray[$i-1]>$intArray[$i]){
                $intValue+=$intArray[$i-1];
            }elseif($intArray[$i-1]<$intArray[$i]){
                $intValue-=$intArray[$i-1];
            }else{
                $intValue+=$intArray[$i-1];
            }
       
    }
    echo $intValue;
}
romanToInt("CMXL");