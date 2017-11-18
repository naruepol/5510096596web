<?php
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "register";

mysql_connect($host,$user,$passwd) or die ("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die ("ติดต่อฐานข้อมูลไม่ได้");

$sql = "INSERT INTO userinfo (id, username, password, name, address, tel, email) VALUES
(4, 'test', 'test', 'test', 'test', 'test', 'test@hotmail.com')";
$sqlquery = mysql_db_query($dbname,$sql);
print "เพิ่มข้อมูลเรียบร้อย";
mysql_close();
?>