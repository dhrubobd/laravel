<?php
/*******************************************************************
 * Fileopen 'w' er jonno file er ager joto data chilo ta muche jay 
 * Er jonno aage file er data save kore pore jog kore dite hoy
 *******************************************************************/


$daysFile = "F:\\Ostad\\Laravel\\module11\\files\\days.txt";
if(is_writable($daysFile)){                         // Checking if the file is writable
    $fileData = file_get_contents($daysFile);
    $fp = fopen($daysFile, 'w');
    fwrite($fp,$fileData);
    fwrite($fp,"Father's day\n");
    fwrite($fp,"Mother's day\n");
    fclose($fp);
    $fileData = file_get_contents($daysFile);
    echo $fileData;
}


