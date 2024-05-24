<?php
/*******************************************************************
 * Fileopen 'a' er jonno file er content er shesh theke content
 * add howa suru hoy, ager content remove hoye jay na
 *******************************************************************/

 $daysFile = "F:\\Ostad\\Laravel\\module11\\files\\days.txt";
 $fp = fopen($daysFile, 'a');
 fwrite($fp,"Children day\n");
 fwrite($fp, "Independent day\n");
 fclose($fp);
 $fileData = file_get_contents($daysFile);
 echo $fileData;