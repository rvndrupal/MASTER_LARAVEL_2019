<!DOCTYPE html>
<html>
<head>
	<title>Formatos | sprintf()</title>
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

$sTotal = sprintf("<p>Monto: $%6.2f, IVA  : $%6.2f, Gran total: $%6.2f</p>", $monto, $montoIVA, $granTotal);
$sRet = sprintf("<p>Retención IVA: $%6.2f, Retención ISR: $%6.2f</p>", $montoRetIVA, $montoRetISR);
$sTotalFinal = sprintf("<p>Total: $%6.2f</p>", $total);
print $sTotal;
print "<p>--------------------------------</p>";
print $sRet;
print "<p>---------------------------------</p>" ;
print $sTotalFinal;
?>
</body>
</html>