<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$valor = "name";
function x($valor){
	is_numeric($valor);
}
function assertCallback(){
	print "Error en la función";
}
$call = "x($valor)";
assert_options(ASSERT_CALLBACK,"assertCallback");
assert($call);
print "Ok";
?>