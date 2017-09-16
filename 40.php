<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$MyPage = __FILE__;
$MyVersion = PHP_VERSION;


print "<h3>ก่อนเรียกใช้ฟังก์ชัน unset</h3>";
print "ตัวแปร MyPage =".$MyPage."<br>";
print "ตัวแปร MyVersion=".$MyVersion."<br>";

unset($MyPage);
unset($MyVersion);	

print "<h3>หลังเรียกใช้ฟังก์ชัน unset</h3>";
print "ตัวแปร MyPage =".$MyPage."<br>";
print "ตัวแปร MyVersion=".$MyVersion."<br>";

?>
</body>
</html>