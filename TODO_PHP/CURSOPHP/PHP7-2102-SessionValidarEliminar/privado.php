<?php  
session_start();
if ($_SESSION["acceso"]!="1") {
	header("location:index.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Información ultra confidencial</title>
</head>
<body>
<h1>Bienvenido a la información ultra confidencial</h1>
<a href="index.php">Regresar</a>
<a href="salida.php">Salir de la sesión</a>
</body>
</html>