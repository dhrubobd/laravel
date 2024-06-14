<?php
$input = "82/3*";
$theStack = new SplStack();
for($i=0;$i<strlen($input);$i++){
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
                return $secondNumber /  $firstNumber;
                break;
        default:
            # code...
            break;
    }
}