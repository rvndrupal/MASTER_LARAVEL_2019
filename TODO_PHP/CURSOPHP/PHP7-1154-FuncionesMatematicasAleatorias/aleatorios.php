<!DOCTYPE html>
<html>
<head>
	<title>Funciones matematicas | aleatorios</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
print rand()."<br>";
print rand()."<br>";
print rand(200,650)."<br>";
print getrandmax()."<hr>";
//
list($param1, $param2) = explode(" ", microtime());
$semilla = $param2 + $param1 * 100000;
print "Semilla ".$semilla."<br>";
srand($semilla);
$r = rand();
print $r;
print "<hr>";

list($param1, $param2) = explode(" ", microtime());
$semilla = $param2 + $param1 * 100000;
print "Semilla ".$semilla."<br>";
mt_srand($semilla);
$r = mt_rand();
print $r;
print "<hr>";

?>
</body>
</html>