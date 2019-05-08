<!DOCTYPE html>
<html>
<head>
	<title>Ciclo do while</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$numero = 5;
$binario = "";
do{
	$d = $numero % 2;
	//concatenamos la cadena
	$binario = $d.$binario;
	$numero = intval($numero/2);
} while($numero>=2);
$binario = $numero.$binario;
print "<p>El número binario es ".$binario."</p>";
?>
</body>
</html>