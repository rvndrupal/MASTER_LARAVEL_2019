<?php
if (isset($_GET["foto"])) {
	$foto = $_GET["foto"];
} else {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Imagenes | Advertencia Borrar</title>
	<script>
		function regresar() {
			window.open("index.php", "_self");
			return false;
		}
		function borrarImagen(foto) {
			window.open("borraImagen.php?foto="+foto, "_self");
			return false;
		}

	</script>
</head>
<body>
<?php
	print "<table border='1'>";
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Ancho</th>";
	print "<th>Alto</th>";
	print "<th>Tamaño kb</th>";
	print "</tr>";
	print "<tr>";
	$archivo = "fotos/".$foto;
	$info = getimagesize($archivo);
	print "<td>";
	print "<img src='fotos/".$foto."' width='300'/>";
	print "</td>";
	print "<td>";
	print $foto;
	print "</td>";
	print "<td>";
	print $info[0];
	print "</td>";
	print "<td>";
	print $info[1];;
	print "</td>";
	print "<td>";
	print number_format(filesize($archivo)/1024,2);
	print "</td>";
	print "</tr>";
	print "</table>";
?>
<p>Advertencia: una vez borrado el archivo, no se podrá recuperar</p>
<form>
	<input type="button" value="Borrar" onclick="borrarImagen('<?php print $foto; ?>');">
	<input type="button" value="Regresar"  onclick="regresar();">
</form>
</body>
</html>