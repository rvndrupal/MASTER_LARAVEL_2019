<!DOCTYPE html>
<html>
<head>
	<title>Expresiones regulares</title>
</head>
<body>
<?php  
$cadena1 = "679094495987123";
$cadena2 = "$678,,,7,8.9....00";
$regex = "/^[[:digit:]]+$/";

if (preg_match($regex, $cadena1)) {
	print "<p>La cadena ".$cadena1." sólo contiene números</p>";
} else {
	print "<p>La cadena ".$cadena1." contiene caracteres no numéricos</p>";
}

if (preg_match($regex, $cadena2)) {
	print "<p>La cadena ".$cadena2." sólo contiene números</p>";
} else {
	print "<p>La cadena ".$cadena2." contiene caracteres no numéricos</p>";
}

?>
</body>
</html>