<?php
/*******************************************************************
 * Fileopen 'r+' er jonno file reading and writing both mode e khulbe
 * File er je content aache sheta rekehe debe
 * Cursor file er prothom e thakbe
 * Notun Content likhle puraton content replace kora shuru korbe
 *******************************************************************/
$daysFile = "F:\\Ostad\\Laravel\\module11\\files\\days.txt";
$fp = fopen($daysFile,'r+');
fwrite($fp,"Valentine's day");
fclose($fp);
$fileData = file_get_contents($daysFile);
echo $fileData;