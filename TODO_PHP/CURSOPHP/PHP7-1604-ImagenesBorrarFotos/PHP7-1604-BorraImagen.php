<?php
if ($_GET["foto"]) {
	$archivo = "fotos/".$_GET["foto"];
	touch($archivo);
	unlink($archivo);
}
header("location:PHP7-1604-ImagenesAdvertencia.php");
?>