<?php require_once("php/conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL | Include y require</title>
	<meta charset="utf-8">
	<?php
		$pregunta = "¿Cuál es la capital de España?";
		$op1 = "Barcelona";
		$op2 = "Madrid";
		$op3 = "Caracas";
		$op4 = "Valladolid";
		$res = "2";
		$examen = "GEO01";
		//armamos el query
		$q = "INSERT INTO preguntas(id,pregunta,op1,op2,op3,op4,buena,examen) ";
		$q.= "VALUES(0,'".$pregunta."','".$op1."','".$op2."','".$op3."','".$op4."','".$res."','".$examen."')";
		//print $q;
		$r = mysqli_query($conn,$q);
		if($r){
			print "<p>Se insertó correctamente el registro</p>";
		} else {
			print "<p>Error al insertar el registro</p>";
		}
	?>
</head>
<body>
	
</body>
</html>