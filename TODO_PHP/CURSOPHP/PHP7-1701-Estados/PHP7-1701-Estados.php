<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo | Estados</title>
	<meta charset="utf-8">
	<?php  
	if (isset($_POST["estado"])) {
		$tc = 18.90;
		$cantidad = $_POST["cantidad"];
		$tipo = $_POST["tipo"];
		if ($tipo=="1") {
			$r = $cantidad * $tc;
			$rc = number_format($r,2);
			print "La cantidad es $".$rc." de pesos mexicanos por ".number_format($cantidad,2)." de dólares americanos al tipo de cambio de ".number_format($tc,2);
		}
		if ($tipo=="2") {
			$tcd = 1 / $tc;
			$r = $cantidad / $tc;
			$rc = number_format($r,2);
			print "La cantidad es $".$rc." de dólares americanos por ".number_format($cantidad,2)." de pesos mexicanos al tipo de cambio de ".number_format($tcd,2);
		}
	}
	print "<br><br>";
	?>
</head>
<body>
<form method="post" action="PHP7-1701-Estados.php">
	<label>Introduzca la cantidad a convertir:</label>
	<input type="text" name="cantidad" size="10"/>
	<br><br>
	<input type="radio" name="tipo" value="1" checked="checked"/>Dólares<br>
	<input type="radio" name="tipo" value="2"/>Pesos Mexicanos<br>
	<input type="hidden" name="estado" value="1"/>
	<input type="submit" value="Convertir">
</form>
</body>
</html>