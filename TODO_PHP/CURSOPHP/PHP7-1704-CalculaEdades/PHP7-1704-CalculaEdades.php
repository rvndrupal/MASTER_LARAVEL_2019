<!DOCTYPE html>
<html>
<head>
	<title>Calcula edades</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
function edad($fecha){
	$dia = date("j");
	$mes = date("n");
	$anio = date("Y");

	$aNacimiento = substr($fecha,0,4);
	$mNacimiento = substr($fecha,5,2);
	$dNacimiento = substr($fecha,8,2);

	if ($mNacimiento > $mes) {
		$edad = $anio - $aNacimiento - 1;
	} else if($mes==$mNacimiento && $dNacimiento > $dia){
		$edad = $anio - $aNacimiento - 1;
	} else {
		$edad = $anio - $aNacimiento;
	}
	return $edad;
}
print "Tenemos ".edad("1941-12-14")." años";
?>
</body>
</html>