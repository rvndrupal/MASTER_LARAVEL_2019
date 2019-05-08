<?php
session_start();
//establecer el contenido
header("Content-Type: image/png");

//Crear el objeto de la imagen
$img = imagecreatetruecolor(150, 30);

//Crear colores
$blanco = imagecolorallocate($img, 255, 255, 255);
$gris = imagecolorallocate($img, 128, 128, 128);
$negro = imagecolorallocate($img, 0, 0, 0);
$blanco = imagecolorallocate($img, 255, 255, 0);
//
imagefilledrectangle($img, 0, 0, 399, 29, $blanco);
//
//Crear una cadena aleatoria
$l = rand(5,7);
$c = "abcdefghijkmnpqrstuvxyz23456789";
$str = "";
$i = 0;
srand((double)microtime()*10000000);
while ($i <= $l) {
	$num = rand() % 32;
	$car = substr($c, $num, 1);
	$str .= $car;
	$i++;
}
//
$texto = $str;
//Archivo de la fuente
$fuente = "arial.ttf";
//
imagettftext($img, 20, 0, 15, 25, $gris, $fuente, $texto);
//sombra
imagettftext($img, 20, 0, 17, 27, $negro, $fuente, $texto);
//
$_SESSION["captcha"] = $texto;
//
//desplegar el rectángulo
imagepng($img);
imagedestroy($img);
?>