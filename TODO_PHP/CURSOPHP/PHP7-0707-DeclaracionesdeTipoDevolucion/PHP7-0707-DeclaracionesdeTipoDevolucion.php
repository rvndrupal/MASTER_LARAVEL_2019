<?php
/*
declare(strict_types=1);
function suma($n1, $n2):bool
{
	return $n1+$n2;
}
var_dump(suma(10,5));
*/

class Gato{};
class Perro{};

function regresaGato(): Gato {
	return new Perro;
}
var_dump(regresaGato());

?>
