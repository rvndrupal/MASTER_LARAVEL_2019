<!DOCTYPE html>
<html>
<head>
	<title>Ciclo while</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$contador = 1;
$veces = 10;
print "<p>Se van a visualizar ".$veces." números</p>";
while ($contador <= $veces) {
	print "<p>Número: ".$contador."</p>";
	$contador++;
}
print "Fin del ciclo, el contador tiene el valor de ".$contador;
?>
</body>
</html>