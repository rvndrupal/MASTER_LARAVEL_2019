<!DOCTYPE html>
<html>
<head>
	<title>getenv()</title>
</head>
<body>
<?php  
$ip = getenv('REMOTE_ADDR');
print "Tu ip es: ".$ip."<br>";

$navegador = getenv('HTTP_USER_AGENT');
print "Tu navegador y sistema operativo es ".$navegador."<br>";

?>
</body>
</html>