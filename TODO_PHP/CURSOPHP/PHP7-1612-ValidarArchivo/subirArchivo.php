<?php  
	if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
		//$nombre = "foto".date("YmdHis");
		$errores_array = array();
		$fileName = $_FILES['foto']['name'];
		$fileSize = $_FILES['foto']['size'];
		$fileTmp = $_FILES['foto']['tmp_name'];
		$fileType = $_FILES['foto']['type'];
		$fileExt = strtolower(end(explode(".",$fileName)));
		print $fileName.", ".$fileSize.", ".$fileTmp.", ".$fileType.", ".$fileExt."<br>";

		$extensiones = array("jpg","jpeg","png");

		if(in_array($fileExt, $extensiones)==false){
			$errores_array[] = "extensión de archivo no permitido";
		}
		if ($fileSize > 1024*1000*2) {
			$errores_array[] = "Archivo excede el tamaño permitido";
		}
		if (file_exists("fotos/".$fileName)) {
			$errores_array[] = "Archivo ya existe.";
		}
		if(empty($errores_array)){
			copy($_FILES["foto"]['tmp_name'],"fotos/".$fileName);
			header("location:index.php");
		} else {
			print_r($errores_array);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subir Archivo</title>
</head>
<body>
<form enctype="multipart/form-data" action="subirArchivo.php" method="POST">
	Subir foto: <input type="file" name="foto">
	<input type="submit" value="Enviar">
</form>
</body>
</html>