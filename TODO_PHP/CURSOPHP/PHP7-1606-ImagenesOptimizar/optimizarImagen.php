<?php
	if (isset($_GET["foto"])==false) {
		header("location:index.php")
	}

	$foto = $_GET["foto"];
	$porcien = $_GET["op"];
	$nombre = $_GET["nombre"];

	$archivo = "fotos/".$foto;

	$info = getimagesize($archivo);
	$ancho = $info[0];
	$alto = $info[1];
	$tipo = $info["mime"];

	$nuevoAncho = $ancho * ($porcien/100);
	$nuevoAlto = $alto * ($porcien/100);


?>