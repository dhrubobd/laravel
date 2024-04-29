<?php

    # Write your PHP code from here
//    fscanf(STDIN,"%d %d",$price,$dPercent);
    
    function calculate($price, $dPercent){
        return $price - ($price*($dPercent/100));
    }
    $price = 500;
    $dPercent = 40;
    printf("Price: %.2f",calculate($price,$dPercent)); 
?>