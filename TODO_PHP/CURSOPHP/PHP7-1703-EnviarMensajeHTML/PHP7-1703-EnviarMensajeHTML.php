<!DOCTYPE html>
<html>
<head>
	<title>Enviar correo HTML</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
	$para = "correo1@misitio.com, correo2@misitio.com";
	$subject = "Recordatorio de cumpleaños del mes";
	$mensaje = "<html>
	<head><title>Recordatorio de cumpleaños del mes de Abril</title></head>
	<body><p>Estas son las personas que cumplen años en Abril</p>
	<table><tr><th>Empleado</th><th>Día</th><th>Mes</th><th>Año</th></tr>
	<tr><td>Juanita Pérez</th><th>1</th><th>Abril</th><th>1990</th></tr>
	<tr><td>Pedro Picapiedra</th><th>5</th><th>Abril</th><th>1987</th></tr>
	<tr><td>Pablo Mármol</th><th>10</th><th>Abril</th><th>1985</th></tr>
	</table></body></html>";

	//Cabeceras
	$cabeceras = "MIME-Version: 1.0"."\r\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1"."\r\n"; 

	//Otras cabeceras
	$cabeceras .= "To: Mary <recursoshumanos@misitio.com>, Direccion <correo2@misitio.com>"."\r\n";
	$cabeceras .= "From: Recordatorio <cumples@misitio.com"."\r\n";
	$cabeceras .= "Cc: pepito@misitio.com"."\r\n";
	$cabeceras .= "Bcc: juanito@misitio.com"."\r\n";

	mail($para, $subject, $mensaje, $cabeceras);


?>
</body>
</html>