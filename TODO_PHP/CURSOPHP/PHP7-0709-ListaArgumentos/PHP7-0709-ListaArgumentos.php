<?php
function suma($simbolo, int ...$numeros)
{
	$total = 0;
	foreach ($numeros as $num) {
		$total += $num;
	}
	return $simbolo.$total;
}

echo suma("euros ","manzana",4,3,4,5,6,7,8,7,56,54,4,3,3,3,6);

?>