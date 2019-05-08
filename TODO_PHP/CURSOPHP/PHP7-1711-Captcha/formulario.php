<?php
	session_start();
	//capturamos los datos
	if (!$_POST["submit"]) {
		print "<form method='POST' action='formulario.php'>";
		print "<p>Escriba las letras que aparecen</p>";
		print "<p><img src='captcha.php'/></p>";
		print "<p><input type='text' name='imagen'></p>";
		print "<p><input type='submit' name='submit' value='valida'></p>";
		print "</form>";
	} else {
		$imagen = $_POST["imagen"];
		if ($imagen==$_SESSION["captcha"]) {
			print "<p>Excelente</p>";
		} else {
			print "<p>No coincide el captcha</p>";
		}
		
	}
	
?>