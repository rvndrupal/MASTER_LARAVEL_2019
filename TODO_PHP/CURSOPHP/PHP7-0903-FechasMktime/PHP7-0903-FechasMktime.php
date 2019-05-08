<!DOCTYPE html>
<html>
<head>
	<title>Fechas | mktime()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cumple = mktime(0,0,0,8,27,1999);
$hoy = time();
$edad = $hoy-$cumple;

print "<p>Tu naciste un ".date("l",$cumple)."</p>";
print "<p>Haz vivido aproximadamente ".($edad/60/60/24)." días</p>";
print "<p>Haz vivido aproximadamente ".($edad/60/60/24/365)." años</p>";

?>
</body>
</html>