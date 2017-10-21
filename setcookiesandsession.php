<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    setCookie("myname","Naruapon",time()+30);
    setCookie("district","Kanchanaburi",time()+120);
		  
	session_start();
	$_SESSION["mysurname"] = "Suwanwijit";   
	
	
	

?>
</body>
</html>