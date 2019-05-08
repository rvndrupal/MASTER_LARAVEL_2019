<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sanear cadena</title>
<?php
function sanear($string){
	$string = trim($string);
	//
	$string = str_replace(
        array('à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
	//
	$string = str_replace(
        array('è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );

    $string = str_replace(
        array('ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );

    $string = str_replace(
        array('ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );

    $string = str_replace(
        array('ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
	 $string = str_replace(
        array('ç', 'Ç'),
        array('c', 'C',),
        $string
    );
	$string = str_replace(
        array("\\", "¨", "º", "-", "~",
             "#", "@", "|", "!", "\"",
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             "."),
        '',
        $string
    );
    return $string;
}
$cadena = "áàäâªÁÀÂÄdoéèëêÉÈÊËreíìïîÍÌÏÎmióòöôÓÒÖÔfaúùüûÚÙÛÜsolñÑçÇlasi\\¨º-~#@|!\,·$%&/()?¡¿[^`]+}{¨´>< ;,:. ";
print $cadena;
print "<hr>";
print sanear($cadena);
?>
</head>

<body>
</body>
</html>