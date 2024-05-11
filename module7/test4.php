<?php
$version1 = "1";
$version2 = "1.1";
$theResult= compareVersion($version1,$version2);
function compareVersion($version1, $version2) {
        $v1Array = explode(".",$version1);
        $v2Array = explode(".",$version2);
        $theReturnValue = 0;
        if(sizeof($v1Array)>sizeof($v2Array)){
            $theArrayLength = sizeof($v1Array);
            for($i= sizeof($v2Array);$i<$theArrayLength;$i++){
                array_push($v2Array,0);
            }
        }else if(sizeof($v1Array)<sizeof($v2Array)){
            $theArrayLength = sizeof($v2Array);
            for($i= sizeof($v1Array);$i<$theArrayLength;$i++){
                array_push($v1Array,0);
            }
        }else{
            $theArrayLength = sizeof($v1Array);
        }
        for($i=0;$i<$theArrayLength;$i++){
            /* $str1 = ltrim($v1Array[$i], '0');
            $str2 = ltrim($v2Array[$i], '0');
            echo $str1." : ".$str2.PHP_EOL; */
            $int1 = (int)$v1Array[$i];
            $int2 = (int)$v2Array[$i];
            echo "$int1 : $int2".PHP_EOL;
            if($int1==$int2){
                continue;
            } else if($int1>$int2){
                $theReturnValue = 1;
               break;
            } else {
                $theReturnValue = -1;
               break;
            }
            
        }
        //print_r($v1Array);
        //print_r($v2Array);
        return $theReturnValue;
}
echo $theResult;