<!DOCTYPE html>
<html>
<head>
	<title>Arreglos asociados</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$empleado = array(
	"nombre" => "James",
	"apellidos" => "Bond",
	"edad" => 40,
	"num" => "007"
);
print "Nombre: ".$empleado["nombre"]." ".$empleado["apellidos"];
foreach ($empleado as $llave => $valor) {
	print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
}
print "<hr>";
asort($empleado);
foreach ($empleado as $llave => $valor) {
	print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
}
?>
</body>
</html>