<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<style>
		.error{ color:red; margin:0; padding: 0;}
	</style>
<?php
if(isset($_POST["bandera"])){
	//recibimos los valores y los almacenamos en variables de trabajo
	$nombre = $_POST["nombre"];
	$clave = $_POST["clave"];
	$comentarios = $_POST["comentarios"];
	$estado = $_POST["estado"];
	$idioma = $_POST["idioma"];
	$pasatiempos = $_POST["pasatiempos"];
	$pasteles = $_POST["pasteles"];
	/*** Validación ***/
	$error = array();
	if($nombre==""){
		$error[0] = "Error: el nombre del usuario no puede estar vacío";
	} 
	if($clave==""){
		$error[1] = "Error: la clave de acceso no puede ser vacía";
	} 
	if($comentarios==""){
		$error[2] = "Error: los comentarios son requeridos";
	} 
	if($estado==""){
		$error[3] = "Error: el estado civil es requerido";
	} 
	if($idioma==""){
		$error[4] = "Error: el idioma es requerido";
	}
	if(isset($pasatiempos)){ 
		if(count($pasatiempos)==0){
			$error[5] = "Error: debe de seleccionar al menos un pasatiempo";
		}
	} else {
		$error[6] = "Error: debe de seleccionar al menos un pasatiempo";
	}
	if(isset($pasteles)){ 
		if(count($pasteles)==0){
			$error[7] = "Error: debe de seleccionar al menos un sabor de pastel";
		}
	} else {
		$error[8] = "Error: debe de seleccionar al menos un sabor de pastel";
	} 
} 

?>
</head>
<body>
	<?php  
	if(count($error)==0 && isset($_POST["bandera"])){
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
	} else {
	?>
	<form action="PHP7-0806-Formulario.php" method="POST">
		<label for="nombre">* Nombre:</label><br>
		<input type="text" name="nombre" id="nombre"/><br>
		<?php  
		if(isset($error[0])) print "<p class='error'>".$error[0]."</p>";
		?>
		<label for="clave">* Clave:</label><br>
		<input type="password" name="clave" id="clave"/><br>
		<?php  
		if(isset($error[1])) print "<p class='error'>".$error[1]."</p>";
		?>
		<label for="comentarios">Comentarios:</label><br>
		<textarea id="comentarios" name="comentarios"></textarea><br>
		<?php  
		if(isset($error[2])) print "<p class='error'>".$error[2]."</p>";
		?>
		<label for="idioma">Idioma:</label><br>
		<select id="idioma" name="idioma">
			<option value="es">Español</option>
			<option value="en">Inglés</option>
			<option value="fr">Francés</option>
		</select><br>
		<?php  
		if(isset($error[3])) print "<p class='error'>".$error[3]."</p>";
		?>
		<label for="estado">Estado:</label><br>
		<input type="radio" name="estado" id="soltero" value="soltero"><label for="soltero">Soltero</label><br>
		<input type="radio" name="estado" id="casado" value="casado"><label for="casado">Casado</label><br>
		<input type="radio" name="estado" id="viudo" value="viudo"><label for="viudo">Viudo</label><br>
		<?php  
		if(isset($error[4])) print "<p class='error'>".$error[4]."</p>";
		?>
		<label>Pasatiempos:</label><br>
		<label><input type="checkbox" name="pasatiempos[]" value="leer" id="leer">Leer</label><br>
		<label><input type="checkbox" name="pasatiempos[]" value="dormir" id="dormir">Dormir</label><br>
		<label><input type="checkbox" name="pasatiempos[]" value="ajedrez" id="ajedrez">Ajedrez</label><br><br>
		<?php  
		if(isset($error[5])) print "<p class='error'>".$error[5]."</p>";
		if(isset($error[6])) print "<p class='error'>".$error[6]."</p>";
		?>
		<label for="pasteles">Sabor de pasteles preferidos:</label><br>
		<select multiple="multiple" name="pasteles[]" id="pasteles">
			<option value="chocolate">Chocolate</option>
			<option value="fresa">Fresa</option>
			<option value="vainilla">Vainilla</option>
			<option value="coco">Coco</option>
			<option value="napolitano">Napolitano</option>
		</select><br>
		<?php  
		if(isset($error[7])) print "<p class='error'>".$error[7]."</p>";
		if(isset($error[8])) print "<p class='error'>".$error[8]."</p>";
		?>
		<input type="hidden" name="bandera" id="bandera" value="bandera">
		<input type="submit" value="Enviar datos"/>
	</form>
	<?php } ?>
</body>
</html>