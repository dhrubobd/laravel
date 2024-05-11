<?php
$word = "a3ej";
$result = isValid($word);
echo $result;
    function isValid($word) {
        $vowels=["a","e","i","o","u"];
        $specialChars= ["@","#","$"];
        $vowelFound = false;
        $consoFound = false;
        $specialFound = false;
        if(strlen($word)>=3){
            $wordArray = str_split($word); 
            $i=0;
            while($i<sizeof($wordArray)){
                
                foreach($specialChars as $specialChar){
                    if ($wordArray[$i]==$specialChar){
                        $specialFound = true;
                        break;
                    }
                }
                if ($specialFound == false){
                    /* if(is_numeric($wordArray[$i])==1){
                        continue;
                    }else  */if(ctype_alpha($wordArray[$i])==true){
                         $vowelCheck = false;
                        foreach($vowels as $vowel){
                            if(strtolower($wordArray[$i])==$vowel){
                                $vowelCheck = true;
                                $vowelFound = true;
                                break;
                            }
                        }
                        if($vowelCheck==false){
                            $consoFound = true;
                        }
                    }
                }else{
                    return false;
                    break;
                }
              $i++;  
            }
            if(($vowelFound==true)&&($consoFound==true)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
