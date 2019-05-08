<!DOCTYPE html>
<html>
<head>
	<title>Sentencias Break y Continue</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
for ($i=0; $i <10 ; $i++) { 
	if ($i==7) {
		print "<p>Este es el número mágico: ".$i;
		break;
	}
	print "<p>El valor de i es: ".$i;
}
print "<p>Fin del ciclo</p>";
for ($i=0; $i <10 ; $i++) { 
	if($i%2==1) continue;
	print "<p>El valor de i es: ".$i;
}
print "<p>Fin del ciclo</p>";
/*** tercer ejemplo ***/
for ($i=0; ; $i++) { 
	if($i>10) break;
	print "<p>El valor de i es: ".$i;
}
print "<p>Fin del ciclo</p>";
/*** cuarto ejemplo ***/
$i=0;
for ( ; ; ) { 
	if($i>10) break;
	print "<p>El valor de i es: ".$i;
	$i++;
}
print "<p>Fin del ciclo</p>";
?>
?>
</body>
</html>