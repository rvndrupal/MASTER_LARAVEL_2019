<!DOCTYPE html>
<html>
<head>
	<title>Validar un correo electrónico con expresiones regulares</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
function validaCorreo($correo){
	$r = preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/', $correo);
	return $r;
}
$correo = "francisco.arce@yahoo.com.mx";
if(validaCorreo($correo)){
	print "El correo '".$correo."' es correcto";
} else {
	print "El correo '".$correo."' es incorrecto";
}
?>
</body>
</html>