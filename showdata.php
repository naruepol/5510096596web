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
         
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "school";

mysql_connect($host,$user,$passwd) or die ("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die ("ติดต่อฐานข้อมูลไม่ได้");

$sql = "INSERT INTO student (firstname, lastname, email, password) VALUES
('$username', '$surname', '$useremail', '$pwd')";
$sqlquery = mysql_db_query($dbname,$sql);
print "เพิ่มข้อมูลเรียบร้อย";
mysql_close(); 

	   
?> 
</body>
</html>