<!DOCTYPE html>
<html>
<head>
	<title>Funciones | Generadores delegados</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
function gen()
{
	yield 1;
	yield 2;
	yield from gen2();
}

function gen2()
{
	yield 3;
	yield 4;
}

foreach (gen() as $val) {
	print $val." ";
}
print "<hr>";
function americaNorte()
{
	yield "Canadá";
	yield "México";
}
function americaCentral()
{
	yield "Costa Rica";
	yield "Honduras";
}
function americaSur()
{
	yield "Colombia";
	yield "Perú";
}
function capitalesAmerica()
{
	yield from americaNorte();
	yield from americaCentral();
	yield from americaSur();
}
foreach (capitalesAmerica() as $val) {
	print $val."<br>";
}
print "<hr>";
?>
</body>
</html>