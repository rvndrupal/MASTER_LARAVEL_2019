<?php
	$arreglo = array("lunes","martes", array("manzana","pera", "uvas", array(1,2,3,4,5)),true);
	print "<pre>";
	print_r($arreglo);
	$hola = true;
	$salida = print_r($hola, true);
	print "</pre>";
	print $salida;
?>