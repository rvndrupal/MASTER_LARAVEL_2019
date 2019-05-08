<!DOCTYPE html>
<html>
<head>
	<title>Cadenas | Mayúsculas y minúsculas</title>
</head>
<body>
<?php  
$cadena = "En el águá clÄra, quÉ brota en la fuente...";
$mayusculas = strtoupper($cadena);
$minusculas = strtolower($cadena);
$mb_mayusculas = mb_strtoupper($cadena,"UTF-8");
$mb_minusculas = mb_strtolower($cadena,"UTF-8");
print "<p>".$cadena."</p>";
print "<p>".$mayusculas."</p>";
print "<p>".$minusculas."</p>";
print "<p>".$mb_mayusculas."</p>";
print "<p>".$mb_minusculas."</p>";

?>
</body>
</html>