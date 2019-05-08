<!DOCTYPE html>
<html>
<head>
	<title>Arreglos | Superglobals</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$nombre = "James";
$apellido = "Bond";

function saludo(){
	return "Hola ".$GLOBALS['nombre']." ".$GLOBALS['apellido'];
}

print saludo();
print "<hr>";
print $_SERVER["PHP_SELF"]."<br>";
print $_SERVER["SERVER_NAME"]."<br>";
print $_SERVER["HTTP_HOST"]."<br>";
print $_SERVER["HTTP_REFERER"]."<br>";
print $_SERVER["SCRIPT_NAME"]."<br>";
print $_SERVER["HTTP_USER_AGENT"]."<br>";
?>
</body>
</html>