<!DOCTYPE html>
<html>
<head>
	<title>Fechas Getdate()</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$dias[] = "Domingo";
$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miércoles";
$dias[] = "Jueves";
$dias[] = "Viernes";
$dias[] = "Sábado";

$fecha_array = getdate();

$dia = $dias[$fecha_array["wday"]];
$mes = $meses[$fecha_array["mon"]-1];
print "hoy es ".$dia." ".$fecha_array["mday"]." de ".$mes." de ".$fecha_array["year"].", y son las ".$fecha_array["hours"]." con ".$fecha_array["minutes"]." minutos.";


?>
</body>
</html>