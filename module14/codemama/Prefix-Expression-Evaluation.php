<?php
$input = "*+823";
$theStack = new SplStack();
for($i=strlen($input)-1;$i>=0;$i--){
    if(is_numeric($input[$i])){
        $theStack->push($input[$i]);
    }else{
        $firstNumber = $theStack->pop();
        $secondNumber = $theStack->pop();
        $calculatedValue = calculateValues($input[$i],$firstNumber,$secondNumber);
        $theStack->push($calculatedValue);
    }
}
echo (int)$theStack->top(); // This is the output were showing the final item of the stack
function calculateValues($theOperator,$firstNumber,$secondNumber){
    switch ($theOperator) {
        case '+':
            return $firstNumber + $secondNumber;
            break;
        case '-':
            return $firstNumber - $secondNumber;
            break;
        case '*':
                return $firstNumber * $secondNumber;
                break;
        case '/':
                return $firstNumber / $secondNumber;
                break;
        default:
            # code...
            break;
    }
}