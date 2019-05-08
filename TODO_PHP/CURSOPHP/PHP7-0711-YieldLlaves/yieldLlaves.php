<!DOCTYPE html>
<html>
<head>
	<title>Funciones | generador asociativo</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$input = <<<'EOF'
1;Sor Juana;Hombres necios
2;López Velarde;La suave Patria
3;Becquer;Vuelven oscuras golondrinas
EOF;

function poemas($input)
{
	foreach (explode("\n",$input) as $value) {
		$r = explode(";", $value);
		$id = array_shift($r);
		yield $id=>$r;
	}
}
foreach (poemas($input) as $id => $poema) {
	print $id."<br>";
	print $poema[0]."<br>";
	print $poema[1]."<br>";
	print "<hr>";
}
?>
</body>
</html>