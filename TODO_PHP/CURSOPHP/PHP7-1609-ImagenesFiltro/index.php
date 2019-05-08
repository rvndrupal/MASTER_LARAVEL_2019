<!DOCTYPE html>
<html>
<head>
	<title>Imagenes | Tabla fotos</title>
</head>
<body>
<?php
/********************
F U N C I O N E S
*********************/
function validaFoto($imagen){
	$patron = "%\.(gif|jpe?g|png)$%i"; 
	// Ejemplo de visualización del resultado 
	$bandera = preg_match($patron, $imagen) == 1 ? true : false;	
	return $bandera;
}
/********************
V A R I A B L E S
*********************/
$dir = opendir("fotos");
$ren = 1;
$i = 0;
/********************
I N I C I O
*********************/
if ($dir) {
	print "<table border='1'>";
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Ancho</th>";
	print "<th>Alto</th>";
	print "<th>Tamaño kb</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar (ancho)</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print "<tr>";
	while ($foto=readdir($dir)) {
		if ($foto != "." && $foto != ".." && validaFoto($foto)) {
			if ($i == $ren) {
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			$archivo = "fotos/".$foto;
			$info = getimagesize($archivo);
			print "<td>";
			print "<img src='fotos/".$foto."' width='100'/>";
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
			print "<td>";
			print "<a href='borrarFoto.php?foto=".$foto."'>Borrar</a>";
			print "</td>";
			print "<td>";
			print "<a href='opcionesFoto.php?foto=".$foto."'>Opciones</a>";
			print "</td>";
			print "<td>";
			print "<a href='optimizarAncho.php?foto=".$foto."'>Opciones Ancho</a>";
			print "</td>";
			print "<td>";
			print "<a href='opcionesFiltro.php?foto=".$foto."'>Filtros</a>";
			print "</td>";
		}
	}
	print "</tr>";
	print "</table>";
} else {
	print "Error al abrir la carpeta fotos";
}
?>
</body>
</html>