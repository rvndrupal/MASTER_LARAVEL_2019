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

$sMonto = number_format($monto,2);
$sMontoIVA = number_format($montoIVA,2);
$sMontoTotal = number_format($granTotal,2);
$sMontoRetIVA = number_format($montoRetIVA,2);
$sMontoRetISR = number_format($montoRetISR,2);
$sMontoTotalFinal = number_format($total,2);
print "<p>Monto: $".$sMonto."</p>";
print "<p>IVA: $".$sMontoIVA."</p>";
print "<p>Total parcial: $".$sMontoTotal."</p>";
print "<hr>";
print "<p>Retención IVA: $".$sMontoRetIVA."</p>";
print "<p>Retención ISR: $".$sMontoRetISR."</p>";
print "<hr>";
print "<p>Total: $".$sMontoTotalFinal."</p>";
$totalFrances = number_format($total,2,","," ");
$totalEspania = number_format($total,2,",",".");
print "<p>Total Francés: $".$totalFrances."</p>";
print "<p>Total Europeo: $".$totalEspania."</p>";
?>
</body>
</html>