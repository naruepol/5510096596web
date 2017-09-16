<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$varA = 123.98;
$varB = "PHP ฉบับผู้เริ่มต้น";
$varC = -12;

print gettype($varA)."<br>";
print gettype($varB)."<br>";
print gettype($varC)."<br>";

$varC = true;

print gettype($varC);


?>
</body>
</html>