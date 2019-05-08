<!DOCTYPE html>
<html>
<head>
	<title>Condicionales sintaxis alterna</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$edad = 45;
if($edad > 40) print "<p>Te regalamos boletos para la Ópera</p>";
else print "<p>Te regalamos boletos para el cine</p>";

$a = 18;
$b = 18;
if($a > $b):
	print $a." es mayor a ".$b;
elseif ($a < $b):
	print $a." es menor a ".$b;
else:
	print $a." es igual a ".$b;
endif;
?>
</body>
</html>