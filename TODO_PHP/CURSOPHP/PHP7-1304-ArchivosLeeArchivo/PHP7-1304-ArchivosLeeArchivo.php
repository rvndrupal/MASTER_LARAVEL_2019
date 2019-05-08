<!DOCTYPE html>
<html>
<head>
	<title>Archivo | Lee Archivo</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$archivo = "datos/datos.txt";
if (touch($archivo)) {
	$id = fopen($archivo, "r");
	//ciclo de lectura del archivo
	while (!feof($id)) {
		//leemos un registro a la vez "newline" \n \r
		$linea = fgets($id,1024);
		//
		print "<p>".$linea."</p>";
	}
	fclose($id);
} else {
	print "<p>Error al acceder al archivo</p>";
}



?>
</body>
</html>