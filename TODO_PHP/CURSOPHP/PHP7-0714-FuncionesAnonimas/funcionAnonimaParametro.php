<?php  
print preg_replace_callback('~-([a-z])~', function($coincidencias){
	return strtoupper($coincidencias[1]);
}, "-hola-mundo");
print "<hr>";
$saludo = function($nombre){
	printf("Hola %s<br>",$nombre);
};
$saludo("Mundo");
$saludo("cara de bola");
?>