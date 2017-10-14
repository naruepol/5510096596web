<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="./showdata.php" method="post">
  <p>เพศ :
  <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female<br>
    First name:<br>
    <input type="text" name="firstname" placeholder="กรุณาระบุชื่อภาษาอังกฤษ" maxlength="20" size="30" required value=""><br>
    Last name:<br>
    <input type="text" name="lastname" value=""><br>
    Email:<br>
    <input type="email" name="email" value="@gmail.com">
    <br>
    Password: <br>
    <input type="password" name="pwd">
    <br>
    District: <br>
    <select name="district">
      <option value="KANCHANABURI">กาญจนบุรี</option>
      <option value="NAKHON PATHOM">นครปฐม</option>
      <option value="RATCHABURI">ราชบุรี</option>
      <option value="PETCHABURI" selected>เพชรบุรี</option> 
    </select>
    <br>
    Message : <br>
    <textarea name="message" rows="5" cols="50"></textarea>
    <br>
    Hobbies : <br>
    <input type="checkbox" name="hobby1" value="reading">อ่านหนังสือ<br>
    <input type="checkbox" name="hobby2" value="tourism">ท่องเที่ยว<br>
    <input type="checkbox" name="hobby3" value="movies">ดูภาพยนต์<br>
    Privilege Day: <br>
    <input type="date" name="pdate"> 
    <br><br>
    <input type="submit" value="Submit">
    <input type="reset"  value="Clear">
  </p>
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
       if(isset($_POST["pwd"])){
		  $pwd = $_POST["pwd"]; 
	      echo "รหัสผ่าน : ".$pwd."<br>";
	   }	   
       if(isset($_POST["district"])){
		  $district = $_POST["district"]; 
	      echo "จังหวัด : ".$district."<br>";
	   }	  
	   if(isset($_POST["message"])){
		  $message = $_POST["message"]; 
	      echo "ข้อความที่ป้อน : ".$message."<br>";
	   }   
	   if(isset($_POST["hobby1"])){
		  $hobby1 = $_POST["hobby1"]; 
	      echo $hobby1."<br>";
	   }  
	   if(isset($_POST["hobby2"])){
		  $hobby2 = $_POST["hobby2"]; 
	      echo $hobby2."<br>";
	   }
	   if(isset($_POST["hobby3"])){
		  $hobby3 = $_POST["hobby3"]; 
	      echo $hobby3."<br>";
	   }
	   	  if(isset($_POST["pdate"])){
		  $pdate = $_POST["pdate"]; 
	      echo "วันที่รับสิทธิพิเศษ :".$pdate."<br>";
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