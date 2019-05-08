<?php
	if (isset($_GET["foto"])==false) {
		header("location:index.php");
	}

	$foto = $_GET["foto"];
	$porcien = $_GET["op"];
	$nombre = $_GET["nombre"];

	$archivo = "fotos/".$foto;

	$info = getimagesize($archivo);
	$ancho = $info[0];
	$alto = $info[1];
	$tipo = $info["mime"];

	$nuevoAncho = $ancho * $porcien / 100;
	$nuevoAlto = $alto * $porcien / 100;

	switch ($tipo) {
		case 'image/jpg':
		case 'image/jpeg':
			$imagen = imagecreatefromjpeg($archivo);
			break;

		case 'image/png':
			$imagen = imagecreatefrompng($archivo);
			break;

		case 'image/gif':
			$imagen = imagecreatefromgif($archivo);
			break;
	}

	//creamos el lienzo donde vaciaremos la nueva imagen
	$lienzo = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	//optimizamos el tamaño GD
	imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	//Vaciamos de la memoria RAM al disco
	imagejpeg($lienzo, "fotos/".$nombre, 80);

	//regresmos
	header("location:index.php");


?>