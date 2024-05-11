<?php
$nums = [-9,-43,24,-23,-16,-30,-38,-30]; 
function findMaxK($nums) {
        $pairArray = [];
        for($i=0;$i<sizeof($nums);$i++){
            for($j=$i+1;$j<sizeof($nums);$j++){
                if(abs($nums[$i])==abs($nums[$j])){
                    if((($nums[$i]<0)&&($nums[$j]>0))||(($nums[$i]>0)&&($nums[$j]<0))){
                        array_push($pairArray,abs($nums[$i]));
                    }
                }
            }
        }
        if($pairArray!=null){
            return max($pairArray);
        }else{
            return -1;
        }
        //print_r($pairArray);
}
$theOutput = findMaxK($nums);
echo $theOutput;