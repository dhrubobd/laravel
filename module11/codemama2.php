<?php
    # Write your PHP code from here
     $S = "abababab"; 
     $T = "ab";
     //echo $S.PHP_EOL;
     //echo $T.PHP_EOL;
     
        
        $length = strlen($T);
        $counter = 0;
        for($i=0;$i<strlen($S);$i++){
            $newString  = "";
            for($j=$i;$j<($i+$length);$j++){
                $newString  = $newString.$S[$j]; 
            }
            if($T==$newString){
                $counter++;
            }
                    //echo $newString.PHP_EOL;
         }
         echo $counter;
     
?>