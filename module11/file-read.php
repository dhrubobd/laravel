<?php
//echo getcwd();
 /****************************
 * Reading File content Line by line
 ***************************/
$daysFile = "F:\\Ostad\\Laravel\\module11\\files\\days.txt";
$fp = fopen($daysFile,'r');
while($line = fgets($fp)){
    echo $line; 
}
//rewind($fp);
fseek($fp,SEEK_SET);
while($line = fgets($fp)){
    echo $line; 
}
fclose($fp);

/****************************
 * Reading Line by Line As Array Data
 ***************************/

 $data = file($daysFile);
 print_r($data);


 /****************************
 * Reading Total File Content Atonce
 ***************************/

 echo "\n";
 $data = file_get_contents($daysFile);
 echo $data;

 /****************************
 * To check if the file is readable
 ***************************/
if(is_readable($daysFile)){
    echo "\n";
    $data = file_get_contents($daysFile);
    echo $data;
}
