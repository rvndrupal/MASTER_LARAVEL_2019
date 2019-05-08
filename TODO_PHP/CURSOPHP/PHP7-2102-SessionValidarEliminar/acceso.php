<?php  
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
if (strcmp($usuario, "pedro")==0 && strcmp($clave, "picapiedra")==0) {
	session_start();
	$_SESSION["acceso"]="1";
	print "<p>Acceso aprobado</p>";
	print "<a href='privado.php'>Acceso a información confidencial</a>";
} else {
	print "Acceso no autoriazado";
}
?>