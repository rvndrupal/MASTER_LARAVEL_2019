<!DOCTYPE html>
<html>
<head>
	<title>Funciones</title>
	<meta charset="utf-8">
</head>
<body>
<?php
/********
Variables
*********/
$empleado = "Pedro Picapiedra";
$mensaje = "buenos días";
/********
Funciones
*********/
function saludo($nombre, $msg){
	print "<h2>Hola ".$nombre.", ".$msg."</h2>";
}
/********
Inicio
*********/
saludo($empleado, $mensaje);
?>
</body>
</html>