<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    //setCookie("myname","Naruapon",time()+30);
	$myname  =  $_COOKIE["myname"];
    //setCookie("district","Kanchanaburi",time()+120);
	$district  =  $_COOKIE["district"];
		  
	session_start();
	//$_SESSION["mysurname"] = "Suwanwijit"; 
	$mysurname = $_SESSION["mysurname"];
	
	
	echo "Cookies - My name is :  $myname, I live in $district<br>";
	echo "Session - My Surname is : $mysurname";
	
	
	

?>
</body>
</html>