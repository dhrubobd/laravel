<?php
/*******************************************************************
 * Fileopen 'a+' er jonno file writing mode e khulbe
 * File er je content aache ta thakbe
 * Cursor Content er shesh e thakebe
 *******************************************************************/
$daysFile = "F:\\Ostad\\Laravel\\module11\\files\\days.txt";
$fp = fopen($daysFile,'a+');
fwrite($fp,"Saturday\n");
fwrite($fp,"Sunday\n");
fwrite($fp,"Tuesday\n");
fwrite($fp,"Wednesday\n");
fwrite($fp,"Thursday\n");
fwrite($fp,"Friday\n");
fwrite($fp,"Holiday\n");
fclose($fp);
$fileData = file_get_contents($daysFile);
echo $fileData;