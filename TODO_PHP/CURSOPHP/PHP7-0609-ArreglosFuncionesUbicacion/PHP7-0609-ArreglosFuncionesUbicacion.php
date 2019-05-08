<!DOCTYPE html>
<html>
<head>
	<title>Arreglos | Funciones de ubicación</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre","treceavo");
print current($meses)."<br>";
print next($meses)."<br>";
print end($meses)."<br>";
print prev($meses)."<br>";
print next($meses)."<br>";
print next($meses)."<br>";
print current($meses)."<br>";


?>
</body>
</html>