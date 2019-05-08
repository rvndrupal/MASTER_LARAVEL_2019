<!DOCTYPE html>
<html>
<head>
	<title>Plantilla animales</title>
	<meta charset="utf-8">
	<?php
	if(isset($_GET["animal"])){
		$animal = $_GET["animal"];
		if ($animal==1) {
			$titulo = "Perro";
			$imagen = "perro.jpg";
		}
		if ($animal==2) {
			$titulo = "Gato";
			$imagen = "gato.jpg";
		}
		if ($animal==3) {
			$titulo = "Gallo";
			$imagen = "gallo.jpg";
		}
		if ($animal==4) {
			$titulo = "Manati";
			$imagen = "manati.jpg";
		}
	}

	?>
</head>
<body>
	<h1>Soy un <?php print $titulo; ?></h1>
	<img src="<?php print 'imagenes/'.$imagen; ?>">
</body>
</html>