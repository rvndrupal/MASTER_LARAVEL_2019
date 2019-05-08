<!DOCTYPE html>
<html>
<head>
	<title>Fecha Checkdate</title>
	<meta charset="utf-8">
	<?php
		if (isset($_GET["fecha"])) {
			$fecha = $_GET["fecha"];
			$fecha = trim($fecha);
			if ($fecha=="") {
				print "La fecha es requerida";
			} else {
				//dd/mm/yyyy
				$fecha_array = explode("/",$fecha);
				//mm/dd/yyyy
				if (checkdate($fecha_array[1], $fecha_array[0],$fecha_array[2])) {
					print "Fecha correcta: ".$fecha;
				} else {
					print "Error en la fecha: ".$fecha;
				}
			}
		}
	?>
</head>
<body>
<form action="PHP7-0904-FechasCheckdate.php" method="GET">
	<input type="text" name="fecha" id="fecha" placeholder="DD/MM/YYYY"/>
	<input type="submit" value="Enviar">
</form>
</body>
</html>