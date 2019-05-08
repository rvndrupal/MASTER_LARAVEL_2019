<?php  
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

?>