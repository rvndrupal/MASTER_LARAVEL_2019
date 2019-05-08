<?php  
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$comentarios = $_POST["comentarios"];
$estado = $_POST["estado"];
$idioma = $_POST["idioma"];
print "<h1>Bienvenido, ".$nombre." a nuestra página</h1>";
print "<p>Clave de usuario: ".$clave."</p>";
print "<p>Comentarios     : ".$comentarios."</p>";
print "<p>Estado Civil    : ".$estado."</p>";
print "<p>Idioma          : ".$idioma."</p>";
?>