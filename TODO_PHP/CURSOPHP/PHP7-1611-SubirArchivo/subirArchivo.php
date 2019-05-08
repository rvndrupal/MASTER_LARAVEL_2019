<?php  
	if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
		$nombre = "foto".date("YmdHis");
		copy($_FILES["foto"]['tmp_name'],"fotos/".$nombre.".jpg");
		header("location:index.php");
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