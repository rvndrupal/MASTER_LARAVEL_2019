<?php
function pastel($costo, $sabor=array("limon"))
{
	return "<p>Esto es un pastel sabor ".join(",",$sabor).", con un costo de $".$costo."</p>";
}
$sabores = array("fresa","chocolate");
print pastel(100,$sabores);
print pastel(200);
?>