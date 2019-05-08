<!DOCTYPE html>
<html>
<head>
	<title>Archivos | file_exists</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$archivo = "prueba";
$carpeta = "datos/";
if (file_exists($carpeta.$archivo)) {
	if (is_file($carpeta.$archivo)) {
		print "<p>Si existe el archivo '".$archivo."' en la carpeta '".$carpeta."'</p>";
	} else if(is_dir($carpeta.$archivo)){
		print "<p>Si existe la carpeta '".$archivo."'</p>";
	} else {
		print "<p>No se pudo determinar el tipo de archivo</p>";
	}
	
	
} else {
	print "<p>NO existe el archivo '".$archivo."' en la carpeta '".$carpeta."'</p>";
}



?>
</body>
</html>