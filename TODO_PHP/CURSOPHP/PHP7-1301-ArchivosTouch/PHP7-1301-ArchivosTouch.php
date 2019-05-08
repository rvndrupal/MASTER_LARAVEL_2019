<!DOCTYPE html>
<html>
<head>
	<title>Archivos | Touch</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$contador = "contador.txt";
if (touch($contador)) {
	print "No hubo error con el touch()";
} else {
	print "Existió un error con el touch()";
}
?>
</body>
</html>