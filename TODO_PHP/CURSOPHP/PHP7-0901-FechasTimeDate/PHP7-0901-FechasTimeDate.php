<!DOCTYPE html>
<html>
<head>
	<title>Fechas: time() y date()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$t = time();
print "<p>".$t."</p>";
$fecha = date("d/m/Y",$t);
print "<p>".$fecha."</p>";
$hora = date("h:i:s",$t);
print "<p>".$hora."</p>";
//
$diaSemana = date("l",$t);
$diaMes = date("j",$t);
$mes = date("F",$t);
$anio = date("Y",$t);
$hora = date("H",$t);
$ampm = date("A",$t);
$min = date("i",$t);
print "Hola es ".$diaSemana." del mes ".$mes." a ".$diaMes." del año ".$anio." y son las ".$hora." y ".$min." minutos.";
?>
</body>
</html>