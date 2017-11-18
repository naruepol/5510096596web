<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="./showdata.php" method="post">
  <p>    First name:<br>
    <input type="text" name="firstname" placeholder="กรุณาระบุชื่อภาษาอังกฤษ" maxlength="20" size="30" required value=""><br>
    Last name:<br>
    <input type="text" name="lastname" value=""><br>
    Email:<br>
    <input type="email" name="email" value="@gmail.com">
    <br>
    Password: <br>
    <input type="password" name="pwd">
    <br><br>
    <input type="submit" value="Submit">
    <input type="reset"  value="Clear">
  </p>
</form>
<br><br>
<?php
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "school";

mysql_connect($host,$user,$passwd) or die ("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die ("ติดต่อฐานข้อมูลไม่ได้");

$sql = "select * from student";
$sqlquery = mysql_db_query($dbname,$sql);

print "จำนวนข้อมูลทั้งหมด ".mysql_num_rows($sqlquery)." คน";
mysql_close(); 

?>
</body>
</html>