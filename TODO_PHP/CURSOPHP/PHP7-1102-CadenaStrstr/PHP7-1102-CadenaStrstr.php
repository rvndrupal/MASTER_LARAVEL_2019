<!DOCTYPE html>
<html>
<head>
	<title>Manejo de cadenas | strstr()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cadena1 = "En el agua clara, que brota en la fuente, un lindo pescado sale de repente";
$cadena2 = "pescado";
if(strstr($cadena1,$cadena2)){
	print "Si se encontró la subcadena '".$cadena2."' en la cadena '".$cadena1."'";
} else {
	print "No se encontró la subcadena '".$cadena2."' en la cadena '".$cadena1."'";
}
?>
</body>
</html>