<?php  
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$comentarios = $_POST["comentarios"];
$estado = $_POST["estado"];
$idioma = $_POST["idioma"];
$pasatiempos = $_POST["pasatiempos"];
$pasteles = $_POST["pasteles"];
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
?>