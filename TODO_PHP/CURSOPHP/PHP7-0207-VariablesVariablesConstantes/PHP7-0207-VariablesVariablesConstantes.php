<!DOCTYPE html>
<html>
<head>
	<title>Variables de variables y contantes</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$cdmx = 22000000;
		$guadalajara = 4000000;
		$monterrey = 1400000;
		//variable de variables
		$ciudad = "cdmx";
		print "<p>La población de la ciudad $ciudad es de ${$ciudad}</p>";
		$ciudad = "guadalajara";
		print "<p>La población de la ciudad $ciudad es de ${$ciudad}</p>";
		$ciudad = "monterrey";
		print "<p>La población de la ciudad $ciudad es de ${$ciudad}</p>";
		//
		//Creamos una constante
		define("TASA_CAMBIO",18.35);
		$deuda = 12345;
		print "Tu deuda en dólares es de ".($deuda*TASA_CAMBIO);
	?>
</body>
</html>