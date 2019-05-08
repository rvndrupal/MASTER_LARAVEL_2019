<!DOCTYPE html>
<html>
<head>
	<title>Formatos serialize()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
	$arreglo = array(
		"fruta"=>"manzana", 
		"equipo"=>"MacPro",
		"animales" => array(
			"perro",
			"gato",
			"ratón"
		));
	$cadena = serialize($arreglo);
	print $cadena."<br>";
	$arreglo2 = unserialize($cadena);
	print var_dump($arreglo2)."<br>";
	print $arreglo2["animales"][1];
?>
</body>
</html>