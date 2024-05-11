<?php
$score = [10,3,8,9,4];
$_score = $score;
 rsort($_score);
$output = [];
for($i=0;$i<count($score);$i++){
    for($j=0;$j<count($score);$j++){
        if($_score[$i]==$score[$j]){
            if($i==0){
                $output[$j] = "Gold Medal";
            }elseif($i==1){
                $output[$j] = "Silver Medal";
            }elseif($i==2){
                $output[$j] = "Bronze Medal";
            }else{
                $thePlace = $i + 1;
                $output[$j] = "{$thePlace}";
            }
        }
    }
}
ksort($output);
print_r($output);

