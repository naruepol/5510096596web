<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>5510096596</title>
</head>

<body>
<?php
$num1 = 50;
$Name = "DevBook";
print "ตัวแปร num1 = ".$num1."<br>";
print "ตัวแปร Name = \"".$Name."\"<br><hr>";

print "ชื่อเซิร์ฟเวอร์ = " .$_SERVER['SERVER_NAME']."<br>";
print "ซอฟต์แวร์ของเซิร์ฟเวอร์=".$_SERVER['SERVER_SOFTWARE']."<br>";
print "PORT =".$_SERVER['SERVER_PORT'];



echo phpinfo();
 
?>
</body>
</html>
