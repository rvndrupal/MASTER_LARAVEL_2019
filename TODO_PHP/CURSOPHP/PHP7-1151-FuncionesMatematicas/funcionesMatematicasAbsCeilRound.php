<!DOCTYPE html>
<html>
<head>
	<title>Funciones Matemáticas | abs ceil floor</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
print "<h2>Valor absoluto abs()</h2>";
print abs(-5);
print "<br>";
print abs(5);
print "<br>";
print abs(-5.6);
print "<br>";
print abs(5.5);
print "<hr>";
print "<h2>Redondea hacia arriba ceil()</h2>";
print ceil(-5);
print "<br>";
print ceil(5);
print "<br>";
print ceil(-5.6);
print "<br>";
print ceil(5.1);
print "<hr>";
print "<h2>Redondea hacia 'abajo' floor()</h2>";
print floor(-5);
print "<br>";
print floor(5);
print "<br>";
print floor(-5.6);
print "<br>";
print floor(5.1);
print "<hr>";
print "<h2>Redondea  round()</h2>";
print round(-5);
print "<br>";
print round(5);
print "<br>";
print round(-5.6);
print "<br>";
print round(5.1);
print "<br>";
print round(5.6);
print "<hr>";
print "<h2>Valor máximo max()</h2>";
print max(5,2,8,6,7,9);
print "<br>";
print max(array(8,3,5,1,8,6,9));
print "<hr>";
print "<h2>Valor mínimo min()</h2>";
print min(5,2,8,6,7,9);
print "<br>";
print min(array(8,3,5,1,8,6,9));
print "<hr>";
?>
</body>
</html>