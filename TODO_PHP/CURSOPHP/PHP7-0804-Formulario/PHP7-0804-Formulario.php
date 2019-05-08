<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form action="PHP7-0804-Valida.php" method="POST">
		<label for="nombre">* Nombre:</label><br>
		<input type="text" name="nombre" id="nombre"/><br>
		<label for="clave">* Clave:</label><br>
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
		<label>Pasatiempos:</label><br>
		<label><input type="checkbox" name="pasatiempos[]" value="leer" id="leer">Leer</label><br>
		<label><input type="checkbox" name="pasatiempos[]" value="dormir" id="dormir">Dormir</label><br>
		<label><input type="checkbox" name="pasatiempos[]" value="ajedrez" id="ajedrez">Ajedrez</label><br><br>
		<label for="pasteles">Sabor de pasteles preferidos:</label><br>
		<select multiple="multiple" name="pasteles[]" id="pasteles">
			<option value="chocolate">Chocolate</option>
			<option value="fresa">Fresa</option>
			<option value="vainilla">Vainilla</option>
			<option value="coco">Coco</option>
			<option value="napolitano">Napolitano</option>
		</select><br>
		<input type="submit" value="Enviar datos"/>
	</form>
</body>
</html>