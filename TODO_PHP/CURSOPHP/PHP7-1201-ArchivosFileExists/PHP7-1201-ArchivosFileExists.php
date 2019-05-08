<!DOCTYPE html>
<html>
<head>
	<title>Archivos | file_exists</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$archivo = "datos.txt";
$carpeta = "datos/";
if (file_exists($carpeta.$archivo)) {
	print "<p>Si existe el archivo '".$archivo."' en la carpeta '".$carpeta."'</p>";
} else {
	print "<p>NO existe el archivo '".$archivo."' en la carpeta '".$carpeta."'</p>";
}



?>
</body>
</html>