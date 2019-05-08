<?php
$nombre = "datos";
$valor = "pacoarce@hotmail.com|Francisco|Arce|20180411";
$fecha = time() + (60*60*24);
setcookie($nombre, $valor, $fecha);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Galletas | Crear</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
if (isset($_COOKIE["datos"])) {
	$datos = $_COOKIE["datos"];
	$datos_array = explode("|", $datos);
	$email = $datos_array[0];
	$nombre = $datos_array[1];
	$apellido = $datos_array[2];
	$fecha = $datos_array[3];
	print "<p>Hola <b>".$nombre." ".$apellido."</b>, recibimos tu mensaje del correo ".$email." en la fecha ".$fecha." de en breve nos comunicaremos contigo.</p>";
} else {
	# code...
}



?>
</body>
</html>