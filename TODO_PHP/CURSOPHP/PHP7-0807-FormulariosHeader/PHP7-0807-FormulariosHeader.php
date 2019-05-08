<?php
if (isset($_GET["quien"])) {
	$quien = $_GET["quien"];
	if ($quien=="perro") {
		header("location:PHP7-0807-FormulariosPerro.php");
	} else {
		header("location:PHP7-0807-FormulariosGato.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formularios Header</title>
	<meta charset="utf-8">
</head>
<body>
<form action="PHP7-0807-FormulariosHeader.php" method="GET">
	<label>¿Qué soy?</label>
	<input type="radio" name="quien" id="perro" value="perro"><label for="perro">Perro</label>
	<input type="radio" name="quien" id="gato" value="gato"><label for="gato">Gato</label>
	<input type="submit" value="Enviar">
</form>
</body>
</html>