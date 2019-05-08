<?php  
$mensaje = "hola";

//Sin el "use"
$ejemplo = function(){
	var_dump($mensaje);
};
$ejemplo();

print "<hr>";
//Utilizando "use"
$ejemplo = function() use ($mensaje){
	var_dump($mensaje);
};
$ejemplo();

print "<hr>";
//Utilizando "use" por referencia
$mensaje = "adios";
$ejemplo = function() use (&$mensaje){
	var_dump($mensaje);
};
$ejemplo();

print "<hr>";
//Utilizando "use" por referencia y argumentos
$mensaje = "buenas tardes";
$ejemplo = function($arg) use (&$mensaje){
	var_dump($arg.", ".$mensaje);
};
$ejemplo("Pedro Picapiedra");

?>