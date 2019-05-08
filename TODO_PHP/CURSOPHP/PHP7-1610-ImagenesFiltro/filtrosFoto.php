<?php
	if (isset($_GET["foto"])==false) {
		header("location:index.php");
	}
	//recibimos los parámetros
	$foto = $_GET["foto"];
	$filtro = $_GET["op"];
	$nombre = $_GET["nombre"];

	$archivo = "fotos/".$foto;

	$info = getimagesize($archivo);
	$ancho = $info[0];
	$alto = $info[1];
	$tipo = $info["mime"];

	//Leyendo del disco a la RAM
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

	//Aplicar filtro
	if ($filtro=="negativo") {
		imagefilter($imagen, IMG_FILTER_NEGATE);
	} else if ($filtro=="grises") {
		imagefilter($imagen, IMG_FILTER_GRAYSCALE);
	} else if ($filtro=="brillo") {
		imagefilter($imagen, IMG_FILTER_BRIGHTNESS,20);
	} else if ($filtro=="contraste") {
		imagefilter($imagen, IMG_FILTER_CONTRATS, 20);
	} else if ($filtro=="rojo") {
		imagefilter($imagen, IMG_FILTER_COLORIZE, 100,0,0);
	} else if ($filtro=="verde") {
		imagefilter($imagen, IMG_FILTER_COLORIZE, 0,100,0);
	} else if ($filtro=="azul") {
		imagefilter($imagen, IMG_FILTER_COLORIZE, 0,0,100);
	} else if ($filtro=="amarillo") {
		imagefilter($imagen, IMG_FILTER_COLORIZE, 100,100,-100);
	} else if ($filtro=="sepia") {
		imagefilter($imagen, IMG_FILTER_GRAYSCALE);
		imagefilter($imagen, IMG_FILTER_COLORIZE, 100,70,50);
	} else if ($filtro=="contornos") {
		imagefilter($imagen, IMG_FILTER_EDGEDETECT);
	} else if ($filtro=="emboss") {
		imagefilter($imagen, IMG_FILTER_EMBOSS);
	} else if ($filtro=="gauss") {
		imagefilter($imagen, IMG_FILTER_GAUSSIAN_BLUR);
	} else if ($filtro=="selectivo") {
		imagefilter($imagen, IMG_FILTER_SELECTIVE_BLUR);
	} else if ($filtro=="removal") {
		imagefilter($imagen, IMG_FILTER_MEAN_REMOVAL);
	} else if ($filtro=="suavizado") {
		imagefilter($imagen, IMG_FILTER_SMOOTH,50);
	}
	
	//creamos el lienzo donde vaciaremos la nueva imagen
	$lienzo = imagecreatetruecolor($ancho, $alto);

	//optimizamos el tamaño GD
	imagecopy($lienzo, $imagen, 0, 0, 0, 0, $ancho, $alto);

	//Vaciamos de la memoria RAM al disco
	imagejpeg($lienzo, "fotos/".$nombre, 80);

	//regresmos
	header("location:index.php");
?>