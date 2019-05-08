<!DOCTYPE html>
<html>
<head>
	<title>Condicionales Rangos</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$edad = 18;
	if ($edad <= 20) {
	 	print "<p>Te regalamos boletos para el cine</p>";
	}
	if ($edad > 20 && $edad <=30) {
	 	print "<p>Te regalamos boletos para el concierto de Katy Perry</p>";
	}
	if ($edad > 30 && $edad <=40) {
	 	print "<p>Te regalamos boletos para el teatro</p>";
	} 
	if ($edad > 40) {
	 	print "<p>Te regalamos boletos para la Ópera</p>";
	} 
?>
</body>
</html>