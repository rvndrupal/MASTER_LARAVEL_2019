<!DOCTYPE html>
<html>
<head>
	<title>Sentencia switch</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
	$estado = "soltera";
	print "Lo invitamos a un viaje por el Amazonas ";
	switch ($estado) {
		case 'soltero':
		case 'soltera':
			print "donde podrá conocer a otras personas como usted ";
			break;

		case 'casado':
		case 'casada':
			print "convivir con su familia ";
			break;

		case 'divorciado':
			print "para que olvide sus problemas ";
			break;

		case 'viudo':
			print "donde podrá reflexionar en sus mejores recuerdos ";
			break;

		case 'es complicado':
		case 'arrejuntado':
		case 'separado':
			print "donde podrá simplificar su vida ";
			break;

		default:
			print "donde podrá definir su vida ";
	}
	print " en una extraordinaria aventura de dos semanas, todo incluido.";
?>
</body>
</html>