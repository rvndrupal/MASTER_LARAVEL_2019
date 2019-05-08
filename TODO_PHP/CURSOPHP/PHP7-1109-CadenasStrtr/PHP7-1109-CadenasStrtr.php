<!DOCTYPE html>
<html>
<head>
	<title>Cadenas | strtr</title>
</head>
<body>
<?php
$tabla = get_html_translation_table(HTML_ENTITIES);
$cadena = "La etiqueta que efectúa un salto de línea en HTML es: <br><hr>";
print $cadena;
print "<br>";
print strtr($cadena, $tabla);
?>
</body>
</html>