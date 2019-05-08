<!DOCTYPE html>
<html>
<head>
	<title>Ciclo for</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
print "<ul>";
for ($i=0; $i < 10 ; $i++) { 
	print "<li>El valor de i es ".$i."</li>";
}
print "</ul>";
print "<ul>";
for ($i=10; $i > 0 ; $i--) print "<li>El valor de i es ".$i."</li>";
print "</ul>";

$i=10;
$j=0;
print "<ul>";
for (; $i > 0 ; $i--,$j++) print "<li>El valor de i es ".$i.", valor de j es ".$j."</li>";
print "</ul>";

?>
</body>
</html>