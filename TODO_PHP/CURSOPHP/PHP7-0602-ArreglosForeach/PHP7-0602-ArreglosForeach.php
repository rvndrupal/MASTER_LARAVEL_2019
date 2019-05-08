<!DOCTYPE html>
<html>
<head>
	<title>ARREGLOS</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miércoles";
$dias[] = "Jueves";
$dias[] = "Viernes";
$dias[] = "Sábado";
$dias[] = "Domingo";

$alumnos[0] = "Alejandro";
$alumnos[1] = "Michell";
$alumnos[2] = "Jessica";
$alumnos[3] = "Laura";
$alumnos[4] = "Pedro";
$alumnos[5] = "Pablo";

foreach ($meses as $key => $value) {
	print "<p>El campo ".$key." tiene un valor de ".$value."</p>";
}

foreach ($dias as $key => $value) {
	print "<p>El campo ".$key." tiene un valor de ".$value."</p>";
}

?>
</body>
</html>