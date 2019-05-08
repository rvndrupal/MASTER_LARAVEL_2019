<!DOCTYPE html>
<html>
<head>
	<title>Archivos | Lee el directorio</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$archivo = ".";
$carpeta = "";
if (file_exists($carpeta.$archivo)) {
	if (is_file($carpeta.$archivo)) {
		print "<p>Si existe el archivo '".$archivo."' en la carpeta '".$carpeta."'</p>";
		$size = filesize($carpeta.$archivo);
		$creado = filectime($carpeta.$archivo);
		$modificado = filemtime($carpeta.$archivo);
		if($size < 1024){
			$medida = "b";
		} else if ($size >=1024 && $size < 1024000) {
			$medida = "Kb";
			$size /= 1000;
		} else {
			$medida = "Mb";
			$size /= 1000000;
		}
		$sCreado = date("d/m/Y H:i:s",$creado);
		$sModificado = date("d/m/Y H:i:s",$modificado);
		print "<ul>";
		print "<li>Tamaño: ".$size." ".$medida."</li>";
		print "<li>Creado: ".$sCreado."</li>";
		print "<li>Modificado: ".$sModificado."</li>";
		print "</ul>";
	} else if(is_dir($carpeta.$archivo)){
		print "<p>Si existe la carpeta '".$archivo."'</p>";
		$dirID = opendir($carpeta.$archivo);
		while ($nombre = readdir($dirID)) {
			print $nombre;
			if(is_file($archivo."/".$nombre)) print " > archivo";
			if(is_dir($archivo."/".$nombre)) print " > dir";
			print "<br>";
		}
	} else {
		print "<p>No se pudo determinar el tipo de archivo</p>";
	}
	
	
} else {
	print "<p>NO existe el archivo '".$archivo."' en la carpeta '".$carpeta."'</p>";
}



?>
</body>
</html>