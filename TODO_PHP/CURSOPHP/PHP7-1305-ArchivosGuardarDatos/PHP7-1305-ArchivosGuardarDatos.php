<!DOCTYPE html>
<html>
<head>
	<title>Archivos | Guardar Datos</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$archivo = "datos/datos.txt";
if (touch($archivo)) {
	$linea1 = "Lindo pescadito,\n";
	$linea2 = "no quieres salir,\n";
	$linea3 = "a jugar con mi aro,\n";
	$linea4 = "vamos al jardin.\n";
	//
	$id = fopen($archivo,"w");
	//
	fwrite($id,$linea1);
	fwrite($id,$linea2);
	fwrite($id,$linea3);
	fwrite($id,$linea4);
	//
	fclose($id);
	//
	//leemos el archivo
	//
	$id = fopen($archivo, "r");
	//
	while (!feof($id)) {
		$linea = fgets($id,1024);
		print "<p>".$linea."</p>";
	}
	fclose($id);

} else {
	print "Error al manipular el archivo";
}
?>
</body>
</html>