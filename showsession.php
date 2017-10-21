<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<br><br>

<?php
    session_start();

    $username = $_SESSION["susername"];
    echo "Username (session): $username ";  
	session_destroy(); 
	
	
?> 
</body>
</html>