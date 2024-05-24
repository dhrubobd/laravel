<?php
    # Write your PHP code from here
     $S = "waterbottle"; 
     $T = "erbottlewat";
     //echo $S.PHP_EOL;
     //echo $T.PHP_EOL;
     if(strlen($S)==strlen($T)){
         $position = 0;
         for($i=0;$i<strlen($S);$i++){
            if($T[$i]==$S[0]){
               $position = $i;
               break;
            }
         }
        $newString  = "";
        for($i=$position;$i<strlen($S);$i++){
            for($j=0;$j<(strlen($T)-$position);$j++){
                if($S[$j]==$T[$i]){
                    $newString=$newString.$T[$i];
                    break;
                }
            }
         }
         //echo $newString.PHP_EOL;
         $newString2  = "";
         if($position!=0){
            for($i=0;$i<$position;$i++){
               if($T[$i]==$S[0]){
                  break;
               }else{
                  $newString2=$newString2.$T[$i];
               }  
            }
         }
         
         //echo $newString2.PHP_EOL;
         $newString3 = $newString2.$newString;
         $newString = $newString . $newString2;

         if(($S==$newString)||($S==$newString3)){
            echo "True";
         }
         else{
            echo "False";
         }
     }else{
        echo "False";
     }
     
?>