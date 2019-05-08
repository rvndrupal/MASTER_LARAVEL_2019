<!DOCTYPE html>
<html>
<head>
	<title>Condicionales</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
	$edad = 56;
	//si es verdadero, true
	if ($edad>40) {
		print "<p>Lo sentimos, esta página puede resultar peligrosa para tu salud</p>";
	} else if($edad>30){
		print "<p>Bienvenido a nuestra página, donde encontrarás lo que siempre haz buscado</p>";
	} else if($edad>18){
		print "<p>Bienvenido a nuestra página, estás en edad de comprar nuestros productos</p>";
	} else {
		print "<p>Lo sentimos, no puedes entrar a nuestra página</p>";
	}
	?>
</body>
</html>