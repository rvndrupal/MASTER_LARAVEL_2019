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

$alumnos[0] = "miguel";
$alumnos[1] = "Michell";
$alumnos[2] = "luisa";
$alumnos[3] = "Laura";
$alumnos[4] = "pedro";
$alumnos[5] = "Pablo";

$cal = array(2,3,5,4,60,40,20,30,200,100,25);
/*
sort($meses);
foreach ($meses as $key => $value) {
	print "<p>Meses[".$key."] = ".$value."</p>";
}

sort($alumnos, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($alumnos as $key => $value) {
	print "<p>Alumnos[".$key."] = ".$value."</p>";
}
*/
sort($cal);
foreach ($cal as $key => $value) {
	print "<p>Calificación[".$key."] = ".$value."</p>";
}
?>
</body>
</html>