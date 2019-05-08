<!DOCTYPE html>
<html>
<head>
	<title>Funciones Return</title>
</head>
<body>
	<?php  
		/***************
		Variables
		****************/
		$subtotal = 1500;
		$tasa = 0.16;
		$iva = 0;
		$edad = 999999;
		/****************
		FUNCIONES
		*****************/
		function calculaIva($sub, $porcien){
			$ivaCalculo = $sub * (1+$porcien);
			return $ivaCalculo;
		}
		function validaEdad($edad)
		{
			$valida = ($edad<=0 || $edad >120);
			return !$valida;
		}
		/****************
		INICIO
		*****************/
		print "<p>Subtotal : ".$subtotal."</p>";
		//calcula iva
		$iva = calculaIva($subtotal, $tasa);
		//
		print "<p>Total con IVA: ".$iva;
		if (validaEdad($edad)) {
			print "<p>Edad válida</p>";
		} else {
			print "<p>Edad NO válida</p>";
		}
		

	?>

</body>
</html>