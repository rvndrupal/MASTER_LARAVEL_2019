<?php  
assert_options(ASSERT_ACTIVE,1);
assert_options(ASSERT_WARNING,0);
assert_options(ASSERT_QUIET_EVAL,1);
assert_options(ASSERT_CALLBACK,"miAssertCallback");

function miAssertCallback($file, $linea, $code){
	print "<br>Error: <br>archivo ".$file."<br>Linea: ".$linea."<br>Code: ".$code;
}
assert('mysqli_query("")');
?>