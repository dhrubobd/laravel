<?php
/*******************************************************************
 * Fileopen 'w+' er jonno file writing mode e khulbe
 * File er je content aache ta purta muche debe
 *******************************************************************/
$daysFile = "F:\\Ostad\\Laravel\\module11\\files\\days.txt";
$fp = fopen($daysFile,'w+');
fwrite($fp,"Valentine's day");
fclose($fp);
$fileData = file_get_contents($daysFile);
echo $fileData;