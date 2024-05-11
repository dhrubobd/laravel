<?php
$people = [3,2,2,1];
$limit = 3;
numRescueBoats($people,$limit);
function numRescueBoats($people, $limit) {
        $boat = 0;
        rsort($people);
       // $arrlength = count($people);
        /* for($i=0;$i<count($people);$i++){
            $weight = 0;
            if(($people[$i]<$limit)){
                if(($i+1)<count($people)){
                    $weight = $people[$i]+$people[$i+1];
                    if($weight<=$limit){
                        $boat+=1;
                        $i++;
                    }
                    else{
                        $boat+=1;
                    }
                }else{
                    $boat+=1;
                }
            }else{
                $boat+=1;
            }
        } */
        $boat = 0;
        sort($people);
        $n = count($people);
        $i = 0;
        $j = $n-1;
        while($i<=$j){
            if(($people[$i]+$people[$j])<=$limit){
                $i+=1;
            }
            $j-=1;
            $boat+=1;
        }
        echo $boat.PHP_EOL;
}