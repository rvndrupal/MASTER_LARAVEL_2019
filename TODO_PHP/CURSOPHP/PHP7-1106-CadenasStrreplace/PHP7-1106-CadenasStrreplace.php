<!DOCTYPE html>
<html>
<head>
	<title>Cadenas | str_replace</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$salario = "$56,500.07";
$cadena = str_replace("$", "", $salario);
$cadena = str_replace(",", "", $cadena);
$nuevoSalario = (double) $cadena;
$nuevoSalario *= 1.12;
$nuevoSalarioCadena = number_format($nuevoSalario,2);

print "<p>Tu salario de ".$salario." más tu bono anual del %12 da un total de $".$nuevoSalarioCadena.", felicides!</p>";

?>
</body>
</html>