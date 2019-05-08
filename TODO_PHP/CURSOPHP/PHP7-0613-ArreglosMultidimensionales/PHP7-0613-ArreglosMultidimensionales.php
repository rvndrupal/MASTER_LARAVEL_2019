<!DOCTYPE html>
<html>
<head>
	<title>Arreglos | Multimiensionales</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$ciudades = array(
	array("México","CDMX","Guadalajara","Monterrey"),
	array("España","Madrid","Barcelona","Bilbao"),
	array("Colombia","Bogotá","Bucaramanga","Medellin"),
	array("Perú","Lima","Cuzco","Arequipa", "Chiclayo", "Ayacucho")
);

for($i = 0; $i< count($ciudades); $i++){
	print "<ul>";
	for($j=0; $j<count($ciudades[$i]); $j++){
		print "<li>".$ciudades[$i][$j]."</li>";
	}
	print "</ul>";
}

?>
</body>
</html>