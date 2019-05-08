<!DOCTYPE html>
<html>
<head>
	<title>Formatos | printf()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$monto = 1500;
$tasaIVA = 0.16;
$montoIVA = $monto * $tasaIVA;
$granTotal = $monto + $montoIVA;

$retISR = 0.1;
$retIVA = 0.166667;

$montoRetIVA = $granTotal * $retIVA;
$montoRetISR = $granTotal * $retISR;

$total = $granTotal - $montoRetISR - $montoRetIVA;

printf("<p>Monto: $%6.2f</p>", $monto);
printf("<p>IVA  : $%6.2f</p>", $montoIVA);
printf("<p>Gran total: $%6.2f</p>", $granTotal);
printf("<p>--------------------------------</p>");
printf("<p>Retención IVA: $%6.2f</p>", $montoRetIVA);
printf("<p>Retención ISR: $%6.2f</p>", $montoRetISR);
printf("<p>---------------------------------</p>");
printf("<p>Total: $%6.2f</p>", $total);

?>
</body>
</html>