<?php
$nums = [2,7,11,15]; 
$target = 9;
function twoSum($nums, $target) {
    $returnValue = [];
    for($i=0;$i<sizeof($nums);$i++){
        for($j=$i+1;$j<sizeof($nums);$j++){
            if(($nums[$i]+$nums[$j])==$target){
                $returnValue = [$i, $j];
                break;
            }
        } 
    }
    return $returnValue;

}
$theOutput= twoSum([2,7,11,15],13);
print_r($theOutput);