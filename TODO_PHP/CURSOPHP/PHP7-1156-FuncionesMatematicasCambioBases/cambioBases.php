<!DOCTYPE html>
<html>
<head>
	<title>Funciones matemáticas | Cambio de base</title>
</head>
<body>
<?php  
$hexadecimal = "FF6600";
print base_convert($hexadecimal, 16, 2);
print "<br>";
print base_convert($hexadecimal, 16, 8);
print "<br>";
print base_convert($hexadecimal, 16, 10);
print "<hr>";
print hexdec("ABCD");

?>
</body>
</html>