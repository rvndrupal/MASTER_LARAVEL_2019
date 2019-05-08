<!DOCTYPE html>
<html>
<head>
	<title>Arreglos | list</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$info = array("guayaba","Psidium","Myrtaceae","del Caribe");
list($nombre,$cientifico,$familia,$origen) = $info;
print "La ".$nombre." (".$cientifico.") son un género de unas cien especies de árboles tropicales y árboles pequeños en la familia ".$familia.", nativas ".$origen.".<hr>";
list($nombre,$cientifico,,$origen) = $info;
print "La ".$nombre." (".$cientifico.") son un género de unas cien especies de árboles tropicales y árboles pequeños, nativas ".$origen.".<hr>";
list($nombre,$cientifico,,) = $info;
print "La ".$nombre." (".$cientifico.") es una fruta deliciosa<hr>";
list($nombre,,,) = $info;
print "La ".$nombre." es la fruta con mayor cantidad de vitamina C<hr>";
list($nombre) = "guayaba";
print "La ".$nombre." es la fruta con mayor cantidad de vitamina C<hr>";
?>
</body>
</html>