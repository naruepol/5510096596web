<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<br><br>

<?php
    if(isset($_COOKIE["cname"])){
	  $getname  =  $_COOKIE["cname"];
	  echo "Name : $getname";
	}
    if(isset($_COOKIE["csurname"])){
	  $getsurname  =  $_COOKIE["csurname"];
	  echo "<br>Surname : $getsurname";
	}	
    if(isset($_COOKIE["cuseremail"])){
	  $getuseremail  =  $_COOKIE["cuseremail"];
	  echo "<br>E-mail : $getuseremail";
	  setcookie("cuseremail",FALSE);
	  
	}
    if(isset($_COOKIE["cpwd"])){
	  $getpwd  =  $_COOKIE["cpwd"];
	  echo "<br>Password : $getpwd";
	  setcookie("cpwd",FALSE);
	}		   
	
	
?> 
</body>
</html>