<?php require_once("php/conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL | Select </title>
	<meta charset="utf-8">
	<?php
		$q = "SELECT * FROM preguntas";
		$r = mysqli_query($conn,$q);
		$n = mysqli_num_rows($r);
	?>
</head>
<body>
	<?php
		print "<h2>Número de registros: ".$n."</h2>";
		print "<table border='1'>";
		while ($data = mysqli_fetch_assoc($r)) {
			print "<tr>";
			print "<td>".$data["pregunta"]."</td>";
			print "<td>".$data["op1"]."</td>";
			print "<td>".$data["op2"]."</td>";
			print "<td>".$data["op3"]."</td>";
			print "<td>".$data["op4"]."</td>";
			print "<td>".$data["buena"]."</td>";
			print "<td>".$data["examen"]."</td>";
			print "</tr>";
		}
		print "</table>";
	?>
</body>
</html>