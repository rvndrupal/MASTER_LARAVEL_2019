<!DOCTYPE html>
<html>
<head>
	<title>Fecha | strtotime()</title>
</head>
<body>
	<?php  
	print strtotime("now")."<br>";
	print strtotime("10 September 2015")."<br>";
	print strtotime("+1 day")."<br>";
	print strtotime("+1 week")."<br>";
	print strtotime("+1 week 2 days 4 hours 2 seconds")."<br>";
	print strtotime("next Thursday")."<br>";
	print strtotime("last MMonday")."<br>";
	?>

</body>
</html>