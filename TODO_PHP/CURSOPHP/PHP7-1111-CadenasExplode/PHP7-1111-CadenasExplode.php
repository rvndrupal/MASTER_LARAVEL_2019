<!DOCTYPE html>
<html>
<head>
	<title>Cadenas | explode</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$frutas = "manzana pera guayaba piña sandía";
$frutas_array = explode(" ", $frutas);
foreach ($frutas_array as $key => $value) {
	print $value."<br>";
}
//asignamos valores
list($manzana, $pera, $guayaba, $pinia, $sandia) = explode(" ", $frutas);
print "La fruta con más vitamina C es la ".$guayaba."<br>";
print "<hr>El uso de los limites<br>";
$frutas_array = explode(" ", $frutas,2);
foreach ($frutas_array as $key => $value) {
	print $value."<br>";
}
print "<hr>El uso de los limites negativos<br>";
$frutas_array = explode(" ", $frutas,-2);
foreach ($frutas_array as $key => $value) {
	print $value."<br>";
}
?>
</body>
</html>