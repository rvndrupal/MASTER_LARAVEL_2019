<!DOCTYPE html>
<html>
<head>
	<title>Archivos | Proteger los Datos</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$archivo = "datos/datos.txt";
if (touch($archivo)) {
	$bandera = false;
	$maximo = 100000;
	$contador = 0;
	//
	while (!$bandera) {
		if (is_writable($archivo)) {
			$bandera = true;
			break;
		}
		$contador++;
		if ($contador > $maximo) {
			break;
		}
	}
	if ($bandera) {
		//primera parte
		$linea1 = "En el agua clara,\n";
		$linea2 = "que brota en la fuente,\n";
		$linea3 = "un lindo pescado,\n";
		$linea4 = "sale de repente.\n";
		//
		$id = fopen($archivo,"w");
		//
		//Hacemos el archivo exclusivo
		//
		flock($id, 2);
		//
		fwrite($id,$linea1);
		fwrite($id,$linea2);
		fwrite($id,$linea3);
		fwrite($id,$linea4);
		//
		fclose($id);
		//
		$linea1 = "Lindo pescadito,\n";
		$linea2 = "no quieres salir,\n";
		$linea3 = "a jugar con mi aro,\n";
		$linea4 = "vamos al jardin.\n";
		//
		$id = fopen($archivo,"a");
		//
		fwrite($id,$linea1);
		fwrite($id,$linea2);
		fwrite($id,$linea3);
		fwrite($id,$linea4);
		//
		fclose($id);
		//
		//liberamos el archivo
		//
		flock($id, 3);
	}
	
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