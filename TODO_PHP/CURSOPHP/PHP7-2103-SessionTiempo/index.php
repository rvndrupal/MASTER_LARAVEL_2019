<!DOCTYPE html>
<html>
<head>
	<title>Acceso</title>
</head>
<body>
<?php if(isset($_GET["error"])) print "Fin de la sesión por tiempo transcurrido."; ?>
<table>
	<form action="acceso.php" method="post">
		<tr>
			<td>Usuario:</td>
			<td><input type="text" name="usuario"></td>
		</tr>
		<tr>
			<td>Clave de acceso:</td>
			<td><input type="password" name="clave"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Enviar"></td>
		</tr>
	</form>
</table>
</body>
</html>