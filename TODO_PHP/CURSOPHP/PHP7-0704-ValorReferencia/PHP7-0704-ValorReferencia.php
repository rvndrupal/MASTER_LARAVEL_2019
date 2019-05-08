<?php
function saludo(&$nombre)
{
	$nombre .= ", buenos dias";
}
$nombre = "Pedro Picapiedra";
saludo($nombre);
print $nombre;
//& pasamos por referencia (si se modifica)
//por omision se pasa el valor (no se modifica)
$fruta = array("manzana","pera");
function frutas(&$f)
{
	array_push($f,"uvas");
}
frutas($fruta);
var_dump($fruta);
?>