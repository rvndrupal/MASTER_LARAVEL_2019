<!DOCTYPE html>
<html>
<head>
	<title>Arreglos | Otras funciones de ordenado</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cal = array(2,3,5,4,60,40,20,30,200,100,25);
rsort($cal);
var_dump($cal);
foreach ($cal as $key => $value) {
	print "<p>Calificación[".$key."] = ".$value."</p>";
}
print "<hr>";
$empleado = array(
	"nombre" => "James",
	"apellidos" => "Bond",
	"edad" => 40,
	"num" => "007"
);
print "<hr>";
arsort($empleado);
foreach ($empleado as $llave => $valor) {
	print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
}
print "<hr>";
ksort($empleado);
foreach ($empleado as $llave => $valor) {
	print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
}
print "<hr>";
krsort($empleado);
foreach ($empleado as $llave => $valor) {
	print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
}
?>
</body>
</html>