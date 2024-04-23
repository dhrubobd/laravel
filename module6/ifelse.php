<?php
  $userName ="abc";
  $password ="124";

  // Simple if Else
  if (($userName=="abc")&&($password=="123")){
    echo "Login Success!";
  }else{
    echo "Login Fail!";
  }

  echo "\n::::::::::::::::::::::::::\n";
  // Else if Ladder

  $mark = 61;
  
  if ($mark >= 90){
    echo "You Got Grade A+";
  }elseif($mark >= 80){
    echo "You Got Grade A";
  }elseif($mark>=70){
    echo "You Got Grade A-";
  }elseif($mark>=60){
    echo "You Got Grade B";
  }elseif($mark>=50){
    echo "You Got Grade C";
  }elseif($mark>=40){
    echo "You Got Grade D";
  }else{
    echo "You Failed";
  }

  echo "\n::::::::::::::::::::::::::\n";
  // Nested If else

  $mark = 90;
  if ($mark >= 90){
    if ($mark<95){  // Nested If Else
        echo "You got Normal A+";
    }else{
        echo "You got Golden A+";
    }
  }else{
    echo "You didn't get A+";
  }

  echo "\n::::::::::::::::::::::::::\n";

  // Inline if else / Ternary operator 


  $age = 12;
  $msg = "";

//   if($age>=18){
//     $msg="You are adult";
//   }else{
//     $msg ="You are child";
//   }

  $age>=18?($msg="You are adult"):($msg ="You are child");

  echo $msg;


  // Nested Ternary operator 

  $mark = 96;
 /* if ($mark >= 90){
    if ($mark<95){  // Nested If Else
        echo "You got Normal A+";
    }else{
        echo "You got Golden A+";
    }
  }else{
    echo "You didn't get A+";
  }
  */
 $gradeInfo ="";
  $mark>=90?(
    $mark<95?($gradeInfo = "You got Normal A+"):($gradeInfo="You got Golden A+")
  ):(
    $gradeInfo = "You didn't get A+"
    );

  echo $gradeInfo;
