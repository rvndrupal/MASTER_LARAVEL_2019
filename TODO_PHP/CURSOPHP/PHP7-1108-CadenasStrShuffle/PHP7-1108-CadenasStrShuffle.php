<!DOCTYPE html>
<html>
<head>
	<title>Cadenas | str_shuffle</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$cadena = "23456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKMNOPQRSTUVWXYZ-_+@";
		$clave = substr(str_shuffle($cadena),0,12);
		print "<p>Tu nueva clave de usuario es: ".$clave."</p>";


	?>

</body>
</html>