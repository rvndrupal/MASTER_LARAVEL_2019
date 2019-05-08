<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form action="PHP7-0802-Valida.php" method="POST">
		<label for="nombre">Nombre:</label><br>
		<input type="text" name="nombre" id="nombre"/><br>
		<label for="clave">Clave:</label><br>
		<input type="password" name="clave" id="clave"/><br>
		<label for="comentarios">Comentarios:</label><br>
		<textarea id="comentarios" name="comentarios"></textarea><br>
		<label for="idioma">Idioma:</label><br>
		<select id="idioma" name="idioma">
			<option value="es">Español</option>
			<option value="en">Inglés</option>
			<option value="fr">Francés</option>
		</select><br>
		<label for="estado">Estado:</label><br>
		<input type="radio" name="estado" id="soltero" value="soltero"><label for="soltero">Soltero</label><br>
		<input type="radio" name="estado" id="casado" value="casado"><label for="casado">Casado</label><br>
		<input type="radio" name="estado" id="viudo" value="viudo"><label for="viudo">Viudo</label><br>
		<input type="submit" value="Enviar datos"/>
	</form>
</body>
</html>