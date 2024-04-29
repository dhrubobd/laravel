<?php
    # Write your PHP code from here
    // fscanf(STDIN,"%d %d %d",$wheels,$carBody,$figureOfPeople);
    $wheels = 30;
    $carBody = 40; 
    $figureOfPeople=59;
    function carMakingCapacity($numberOfParts,$requiredQuantity){
        return floor($numberOfParts/$requiredQuantity);
    }
    $carMakingCapacityByWheel = carMakingCapacity($wheels,4);
    $carMakingCapacityByBody = carMakingCapacity($carBody, 1);
    $carMakingCapacityByFOP = carMakingCapacity($figureOfPeople,2);

    // Minimum capacity shows the total complete car we can make

    printf(min($carMakingCapacityByWheel,$carMakingCapacityByBody,$carMakingCapacityByFOP));
?>