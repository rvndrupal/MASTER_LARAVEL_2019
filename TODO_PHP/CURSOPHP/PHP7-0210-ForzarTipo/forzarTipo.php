<!DOCTYPE html>
<html>
<head>
	<title>Forzar tipo de dato</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$div = 10/3;
print $div."<br>";
$entero = (int) $div;
print $entero."<br>";
var_dump($div);
print "<br>";
var_dump($entero);
print "<br>";
print intval(10/3)."<br>";
settype($div, "integer");
var_dump($div);
print "<br>";
print gettype($div);
?>
</body>
</html>