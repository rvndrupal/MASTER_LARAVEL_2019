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
	<title>Imagenes | Opciones filtro</title>
	<script>
		function regresar() {
			window.open("index.php", "_self");
			return false;
		}
		function opcionesImagen(foto) {
			var op = document.getElementById("op").value;
			var nombre = document.getElementById("nombre").value;
			window.open("filtrosFoto.php?foto="+foto+"&op="+op+"&nombre="+nombre, "_self");
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
<p>Selecciona una opción para redir la foto en forma proporcional</p>
<form>
	<select id="op">
		<option value="negativo">Negativo</option>
		<option value="grises">Escalas de grises</option>
		<option value="brillo">Brillantés</option>
		<option value="contaste">Contraste</option>
		<option value="rojo">Rojo</option>
		<option value="verde">Verde</option>
		<option value="azul">Azul</option>
		<option value="amarillo">Amarillo</option>
		<option value="sepia">sepia</option>
		<option value="contornos">Contornos</option>
		<option value="emboss">Emboss</option>
		<option value="gauss">Blur Gaussiano</option>
		<option value="selectivo">Blur selectivo</option>
		<option value="removal">Mean removal</option>
		<option value="suavizado">Suavizado</option>

	</select>
	<br><br>
	<label for="nombre">Nombre de la nueva imagen:</label>
	<br><br>
	<input type="text" name="nombre" id="nombre"/>
	<br><br>

	<input type="button" value="Optimizar" onclick="opcionesImagen('<?php print $foto; ?>');">
	<input type="button" value="Regresar"  onclick="regresar();">
</form>
</body>
</html>