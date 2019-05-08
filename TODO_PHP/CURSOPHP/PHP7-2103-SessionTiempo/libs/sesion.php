<?php
$limite = 5;
session_start();
if (time()-$_SESSION["acceso"]>$limite) {
	header("location:index.php?error=true");
	exit;
} else if (isset($_SESSION["acceso"])==false) {
	header("location:index.php");
	exit;
} else {
	$_SESSION["acceso"] = time();
}
?>