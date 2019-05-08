<!DOCTYPE html>
<html>
<head>
	<title>Operador condicional</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
	$total = 12345;
	$tipoCambio = 0;
	$granTotal = ($tipoCambio>0)? $total * $tipoCambio : $total;
	$cadena = ($tipoCambio>0)? ", tipo de cambio ".$tipoCambio : "";
	print "El gran total del pedido es ".$granTotal.$cadena;

?>
</body>
</html>