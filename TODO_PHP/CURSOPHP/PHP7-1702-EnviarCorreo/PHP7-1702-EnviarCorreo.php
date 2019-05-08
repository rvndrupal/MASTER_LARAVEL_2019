<!DOCTYPE html>
<html>
<head>
	<title>Enviar un correo</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$mensaje = "Hola, cara de bola\r\n¿Cómo estás?";
$mensaje = wordwrap($mensaje, 70, "\r\n");
$para = "micorreo@misitio.com";
$titulo = "Tienes un correo";
$cabecera = "From: info@misitio.com\r\n".
"Reply-To: info@misitio.com\r\n".
"X-Mailer: PHP/".phpversion();

if(mail($para, $titulo, $mensaje)){
	print "Mensaje enviado";
} else {
	print "Error al enviar el mensaje";
}

?>
</body>
</html>