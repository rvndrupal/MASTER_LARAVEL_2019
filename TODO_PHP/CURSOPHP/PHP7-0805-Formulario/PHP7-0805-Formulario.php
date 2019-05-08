<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
<?php
if(isset($_POST["nombre"])){
	$nombre = $_POST["nombre"];
	$clave = $_POST["clave"];
	$comentarios = $_POST["comentarios"];
	$estado = $_POST["estado"];
	$idioma = $_POST["idioma"];
	$pasatiempos = $_POST["pasatiempos"];
	$pasteles = $_POST["pasteles"];
	/*** Valicación ***/
	$error = array();
	if($nombre==""){
		array_push($error,"Error: el nombre del usuario no puede estar vacío");
	} 
	if($clave==""){
		array_push($error,"Error: la clave de acceso no puede ser vacía");
	} 
	if($comentarios==""){
		array_push($error,"Error: los comentarios son requeridos");
	} 
	if($estado==""){
		array_push($error,"Error: el estado civil es requerido");
	} 
	if($idioma==""){
		array_push($error,"Error: el idioma es requerido");
	}
	if(isset($pasatiempos)){ 
		if(count($pasatiempos)==0){
			array_push($error,"Error: debe de seleccionar al menos un pasatiempo");
		}
	} else {
		array_push($error,"Error: debe de seleccionar al menos un pasatiempo");
	}
	if(isset($pasteles)){ 
		if(count($pasteles)==0){
			array_push($error,"Error: debe de seleccionar al menos un sabor de pastel");
		}
	} else {
		array_push($error,"Error: debe de seleccionar al menos un sabor de pastel");
	} 
	if(count($error)>0){
		print "<ul>";
		foreach ($error as $key => $value) {
			print "<li>".$value."</li>";
		}
		print "</ul>";
	} else {
		print "<h1>Bienvenido, ".$nombre." a nuestra página</h1>";
		print "<p>Clave de usuario: ".$clave."</p>";
		print "<p>Comentarios     : ".$comentarios."</p>";
		print "<p>Estado Civil    : ".$estado."</p>";
		print "<p>Idioma          : ".$idioma."</p>";
		print "<p>Num. pasatiempos: ".count($pasatiempos)."</p>";
		print "<ol>";
		foreach ($pasatiempos as $key => $value) {
			print "<li>".$value."</li>";
		}
		print "</ol>";
		print "<p>Sabor de pasteles: ".count($pasteles)."</p>";
		print "<ol>";
		foreach ($pasteles as $key => $value) {
			print "<li>".$value."</li>";
		}
		print "</ol>";
	}
} 

?>
</head>
<body>
	<form action="PHP7-0805-Formulario.php" method="POST">
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