<?php
	if ($_SERVER['REQUEST_METHOD']=="GET"){ // For Read
		echo "This is GET Request";
	}
	
	if ($_SERVER['REQUEST_METHOD']=="POST"){ // For Create
		echo "This is POST Request";
	}
	
	if ($_SERVER['REQUEST_METHOD']=="PUT"){ // For Update
		echo "This is PUT Request";
	}
	
	if ($_SERVER['REQUEST_METHOD']=="DELETE"){ // For Delete
		echo "This is DELETE Request";
	}
	
	if ($_SERVER['REQUEST_METHOD']=="PATCH"){ // For Small Update
		echo "This is PATCH Request";
	} 
	
?>