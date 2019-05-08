<!DOCTYPE html>
<html>
<head>
	<title>Funciones | Gerneradores return</title>
</head>
<body>
<?php
$gen = (function(){
	yield 1;
	yield 2;
	return 3;
})();
foreach ($gen as $value) {
	print $value."<br>";
}
print $gen->getReturn()."<br>";
?>
</body>
</html>