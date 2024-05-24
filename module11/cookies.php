<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $plainTextJSON = file_get_contents('php://input');
    $plainArray = json_decode($plainTextJSON,true);
    $userName = $plainArray['username'];
    setcookie('username',$userName, ["expires"=>time()+3600]);
    echo "Cookie Creation Success";
}

if($_SERVER['REQUEST_METHOD']=="GET"){
        echo $_COOKIE["username"];
}

if ($_SERVER['REQUEST_METHOD']=="DELETE"){ 
    setcookie("username","",["expires"=>time()-3600]);
    echo "Cookie Delete Success!";
}