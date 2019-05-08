<!DOCTYPE html>
<html>
<head>
	<title>Formato setlocale()</title>
</head>
<body>
	<?php  
		$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');
		print "La configuración local en alemán es ".$loc_de;
	?>
</body>
</html>