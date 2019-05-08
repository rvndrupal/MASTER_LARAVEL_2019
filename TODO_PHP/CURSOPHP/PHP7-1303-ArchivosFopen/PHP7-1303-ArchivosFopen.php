<!DOCTYPE html>
<html>
<head>
	<title>Archivos | fopen() y fclose()</title>
</head>
<body>
<?php  
$archivo = "datos.txt";
if (touch($archivo)) {
	//Abrimos con "a" append
	$id = fopen($archivo, "a");
	var_dump($id);
	//cerramos
	fclose($id);
} else {
	print "Error en el touch del archivo";
}



?>

</body>
</html>