<?php  
session_start();
if (isset($_SESSION["acceso"])) {
	session_destroy();
	unset($_SESSION["acceso"]);
	print utf8_encode("Haz abandonado la sesión");
} else {
	print utf8_encode("Lo siento, no hay sesión abierta.");
}
print "<br>";
print "<a href='index.php'>Regresar</a>";
?>