<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$a = 17;
$b = 42;
$x = "W";
$y = "c";

$result = boolean;
$result = ($a<>$b)&($x<$y);
print "<br>".$result;

$result = ($b>=$a)^($x!=$y);
print "<br>".$result;

$result = ($b>=$a)|($x!=$y);
print "<br>".$result;

?>
</body>
</html>