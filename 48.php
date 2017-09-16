<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$a = "Hello";
$b = " World";

$c = $a.$b;

print $c;

$d = " Thailand";

$c.=$d;   // $c = $c.$d;

print "<br>".$c;

?>
</body>
</html>