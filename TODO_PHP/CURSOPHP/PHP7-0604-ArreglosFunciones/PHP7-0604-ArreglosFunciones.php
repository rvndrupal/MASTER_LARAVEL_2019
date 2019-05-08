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

array_push($meses,"Treceavo mes","Catorceavo mes"); //agrega al final del arreglo
array_unshift($dias, "primero","primerisimo"); //agrega al princio del arreglo
$mesPrimero = array_shift($meses);
$mesesNuevos = array_slice($meses,11,2); //slice solo copia
$diasElimiminados = array_splice($dias, 5, 2); //copia y elimina

$mesesDias = array_merge($meses,$dias);
foreach ($mesesDias as $key => $value) {
	print "<p>Elemento ".$key." con valor: ".$value."</p>";
}
print "<hr>";
foreach ($mesesNuevos as $key => $value) {
	print "<p>Elemento ".$key." con valor: ".$value."</p>";
}
print "<hr>";
foreach ($diasElimiminados as $key => $value) {
	print "<p>Elemento ".$key." con valor: ".$value."</p>";
}

?>
</body>
</html>