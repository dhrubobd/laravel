<?php
//Set Session Store
if ($_SERVER['REQUEST_METHOD']=="POST"){ 
    $plainTextJSON = file_get_contents("php://input");
    // Converting plain text JSON to Array
    $plainArray = json_decode($plainTextJSON,true);
    $userName = $plainArray['username'];
    session_start();
    $_SESSION['username'] = $userName;
    echo "Session Successfully Created";
}

// Read from session Store
if ($_SERVER['REQUEST_METHOD']=="GET"){ 
    session_start();
    echo $_SESSION['username'];
}

//Set Session Delete
if ($_SERVER['REQUEST_METHOD']=="DELETE"){ 
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "Session Destroyed";
    }