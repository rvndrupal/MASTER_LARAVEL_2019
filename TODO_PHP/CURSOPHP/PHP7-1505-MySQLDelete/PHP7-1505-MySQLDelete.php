<?php require_once("php/conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL | Delete </title>
	<meta charset="utf-8">
	<?php
		$pregunta = "¿Cuál es la capital de Argentina?";
		$op1 = "Buenos Aires";
		$op2 = "Lima";
		$op3 = "Caracas";
		$op4 = "Los Ángeles";
		$res = "1";
		$examen = "GEO01";
		//armamos el query
		$q = "INSERT INTO preguntas(id,pregunta,op1,op2,op3,op4,buena,examen) ";
		$q.= "VALUES(0,'".$pregunta."','".$op1."','".$op2."','".$op3."','".$op4."','".$res."','".$examen."')";
		//print $q;
		if(mysqli_query($conn,$q)){
			print "<p>Se insertó correctamente el registro</p>";
		} else {
			print "<p>Error al insertar el registro</p>";
		}
		//
		$q = "DELETE FROM preguntas";
		if(mysqli_query($conn,$q)){
			print "<p>Se eliminó correctamente el registro</p>";
		} else {
			print "<p>Error al eliminar el registro</p>";
		}
	?>
</head>
<body>
	
</body>
</html>