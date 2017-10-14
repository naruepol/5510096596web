<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<br><br>

<?php
       if(isset($_POST["firstname"])){
		  $username =  strtoupper($_POST["firstname"]);
	      echo "ชื่อ : ".$username."<br>";
	   }
       if(isset($_POST["lastname"])){
		  $surname = strtoupper($_POST["lastname"]);
	      echo "นามสกุล : ".$surname."<br>";
	   }
       if(isset($_POST["email"])){
		  $useremail = strtoupper($_POST["email"]); 
	      echo "อีเมล์ : ".$useremail."<br>";
	   }
       if(isset($_POST["pwd"])){
		  $pwd = $_POST["pwd"]; 
	      echo "รหัสผ่าน : ".$pwd."<br>";
	   }	   
         
	   setCookie("cname",$username,time()+60);
	   setCookie("csurname",$surname,time()+60);
	   setCookie("cuseremail",$useremail,time()+60);
	   setCookie("cpwd",$pwd,time()+60);	
	   
	   session_start();
	   $_SESSION["susername"] = $username;   

	   
?> 
</body>
</html>