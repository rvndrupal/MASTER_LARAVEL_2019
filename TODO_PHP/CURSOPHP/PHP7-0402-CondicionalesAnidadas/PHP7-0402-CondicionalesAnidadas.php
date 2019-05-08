<!DOCTYPE html>
<html>
<head>
	<title>Condicionales Anidadas</title>
</head>
<body>
<?php 
	$edad = 18;
	$edoCivil = "soltero";
	if ($edad < 40) {
		print "Disfrute de nuestro crucero en el Caribe ";
		if ($edoCivil == "casado") {
			print "en compañía de su familia ";
		}
		print "con un descuento especial y muchas sorpresas";
	} else {
		print "Lo invitamos a nuestro retiro al campo donde encontrará paz ";
		if ($edoCivil=="casado") {
			print "con sus seres queridos ";
		} else {
			print "de encontrarse con usted mismo ";
		}
		print " en lo alto de un hermoso lago en las montañas Suizas.";
	}
	print "<br>";
	print "Su edad es de ".$edad." años y su estado civil es ".$edoCivil;

 ?>
</body>
</html>