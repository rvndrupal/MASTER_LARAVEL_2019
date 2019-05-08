<!DOCTYPE html>
<html>
<head>
	<title>Funciones numéricas | range()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
foreach (range(0,30) as $key => $value) {
	print $value.", ";
}
print "<hr>";
foreach (range(30,0) as $key => $value) {
	print $value.", ";
}
print "<hr>";
foreach (range(30,0,5) as $key => $value) {
	print $value.", ";
}
print "<hr>";
foreach (range("a","z") as $key => $value) {
	print $value.", ";
}
print "<hr>";
foreach (range("z","a") as $key => $value) {
	print $value.", ";
}
print "<hr>";
$numeros = range(0,100,5);
shuffle($numeros);
foreach ($numeros as $key => $value) {
	print $value.", ";
}
print "<hr>";
?>
</body>
</html>