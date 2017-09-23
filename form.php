<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="./form.php" method="post">
  เพศ : 
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
  First name:<br>
  <input type="text" name="firstname" placeholder="กรุณาระบุชื่อภาษาอังกฤษ" maxlength="20" size="30" required value=""><br>
  Last name:<br>
  <input type="text" name="lastname" value=""><br>
  Email:<br>
  <input type="email" name="email"><br><br>
  <input type="submit" value="Submit">
  <input type="reset"  value="Clear">
</form>
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
	   
	   if(isset($_POST["gender"])){
		  $input_gender = $_POST["gender"];
		  if($input_gender=="male"){
			  echo $username." คุณเป็นผู้ชาย";
		  }else{
			  echo $username." คุณเป็นผู้หญิง";   
		  }
		  
	   }
	   
	   
?> 
</body>
</html>