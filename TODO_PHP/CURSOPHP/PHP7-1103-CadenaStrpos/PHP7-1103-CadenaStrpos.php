<!DOCTYPE html>
<html>
<head>
	<title>Manejo de cadenas | strpos()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cadena1 = "En el agua clara, que brota en la fuente, un lindo pescado sale de repente";
$cadena2 = "la";

$pos = 0;
$pos_array = array();

while ($pos = strpos($cadena1, $cadena2, $pos)) {
	array_push($pos_array,$pos);
	$pos++;
}
print "<p>El número de ocurrencias de la cadena '".$cadena2."'' en la '".$cadena1."'' es de ".count($pos_array)." veces.</p>";
foreach ($pos_array as $key => $value) {
	print "<p>Posición ".$key." => ".$value."</p>";
}
?>
</body>
</html>