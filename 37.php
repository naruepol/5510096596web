<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>5510096596</title>
</head>

<body>
<?php
class Dog
{
	var $seed = "";
	var $color = "";
	
	function bark()
	{
		echo "โฮ่ง โฮ่ง โฮ่ง";
	}
}

$objDog = new Dog();
$objDog->seed = "GoldenRetriever";
$objDog->color = "น้ำตาล";
print " พันธ์ $objDog->seed <br>";
print " สี $objDog->color <br>";
print " เสียงเห่า ";
print $objDog->bark();

$objDD = new Dog();
$objDD->seed = "Thai";
$objDD->color = "เหลือง";
print " <br>พันธ์ $objDD->seed <br>";
print " สี $objDD->color <br>";
print " เสียงเห่า ";
print $objDD->bark();

?>
</body>
</html>
