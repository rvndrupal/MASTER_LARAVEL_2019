<!DOCTYPE html>
<html>
<head>
	<title>Archivos | Unlink</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$contador = "contador.txt";
if (touch($contador)) {
	print "No hubo error con el touch()";
} else {
	print "Existió un error con el touch()";
}
print "<br>";
if(unlink($contador)){
	print "El archivo ".$contador." se borró exitosamente";
} else {
	print "Error al borrar el archivo ".$contador;
}
?>
</body>
</html>