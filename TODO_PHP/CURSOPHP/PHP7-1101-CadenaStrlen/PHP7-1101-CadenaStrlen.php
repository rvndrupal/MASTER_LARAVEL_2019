<!DOCTYPE html>
<html>
<head>
	<title>Manejo de cadenas | strlen()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cadena1 = "En el agua clara, que brota en la fuente, un lindo pescado sale de repente";
$cadena2 = "";
for ($i=0; $i < strlen($cadena1); $i++) { 
	$cadena2 = $cadena1[$i].$cadena2;
}
print "<p>".$cadena1."</p>";
print "<p>".$cadena2."</p>";
print "<p>La longitu de la cadena es de ".strlen($cadena1)." caracateres</p>";
?>
</body>
</html>