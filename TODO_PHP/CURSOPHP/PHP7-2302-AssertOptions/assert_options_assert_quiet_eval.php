<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//$valor = "name";
function x($valor){
	is_numeric($valor);
}
$call = "x($valor)";
assert_options(ASSERT_QUIET_EVAL,0);
assert($call,"***Error al procesar la funcion***");
print "Ok";
?>