<!DOCTYPE html>
<html>
<head>
	<title>Fechas | Timezone</title>
	<meta charset="utf-8">
</head>
<body>
<?php
//print phpinfo();
print date("D, d M Y H:i:s")."<br>";
//date_default_timezone_set("America/Mexico_City");
ini_set("date.timezone", "America/Mexico_City");
print date("D, d M Y H:i:s");
?>
</body>
</html>