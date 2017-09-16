<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($name))
{
	print "มีการกำหนดค่าแล้วคือ ".$name."<hr>";
}
else
{
	print"ยังไม่มีการกำหนดค่าตัวแปร"."<hr>";
}

$name = "นฤพล สุวรรณวิจิตร";

if(isset($name))
{
	print "มีการกำหนดค่าแล้วคือ ".$name."<hr>";
}
else
{
	print"ยังไม่มีการกำหนดค่าตัวแปร"."<hr>";
}
	

?>
</body>
</html>