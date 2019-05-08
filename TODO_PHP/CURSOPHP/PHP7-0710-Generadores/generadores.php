<!DOCTYPE html>
<html>
<head>
	<title>Funciones | generadores</title>
</head>
<body>
<?php 
function rango($inicio, $fin, $incremento=1)
{
	for($i=$inicio; $i<=$fin; $i+=$incremento){
		yield $i;
	}
}
foreach (range(1,10) as $key => $value) {
	print $value." ";
}
print "<hr>";
foreach (rango(1,10) as $key => $value) {
	print $value." ";
}
print "<hr>";

?>
</body>
</html>