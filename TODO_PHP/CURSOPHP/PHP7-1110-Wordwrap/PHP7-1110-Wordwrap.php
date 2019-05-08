<!DOCTYPE html>
<html>
<head>
	<title>Cadena | wordwrap</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cadena = "En el agua clara, que brota en la fuente, un lindo pescado, sale de repente";
$salida = wordwrap($cadena,70,"\r\n",true);
print $salida;


?>
</body>
</html>