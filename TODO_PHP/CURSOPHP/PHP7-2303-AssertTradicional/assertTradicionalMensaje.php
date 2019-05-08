<?php  
assert_options(ASSERT_ACTIVE,1);
assert_options(ASSERT_WARNING,0);
assert_options(ASSERT_QUIET_EVAL,1);
assert_options(ASSERT_CALLBACK,"miAssertCallback");

function miAssertCallback($file, $linea, $code, $mensaje=""){
	print "<br>Error: <br>archivo ".$file."<br>Linea: ".$linea."<br>Code: ".$code;
	if ($mensaje!="") {
		print "<br>Mensaje: ".$mensaje;
	}
	print "<hr>";
}
assert('mysqli_query("")');
assert('mysqli_query("")',"Error en el query");
?>