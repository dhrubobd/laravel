<?php
$input = "({{()}}))";
$theStack = new SplStack();
for($i=0;$i<strlen($input);$i++){
    if(($input[$i]==")")||($input[$i]=="}")||($input[$i]=="]")){
        if($theStack->isEmpty()){
            $theStack->push($input[$i]);
            echo "Brackets are not balanced.";
            break;
        }else{
            if(($input[$i]==")")&&($theStack->top()=="(")){
                $theStack->pop();
            }elseif(($input[$i]=="}")&&($theStack->top()=="{")){
                $theStack->pop();
            }elseif(($input[$i]=="]")&&($theStack->top()=="[")){
                $theStack->pop();
            }else{
                echo "Brackets are not balanced.";
                break;
            }
        }
    }else{
        $theStack->push($input[$i]);
    }
}
if($theStack->isEmpty()){
    echo "Brackets are balanced.";
}