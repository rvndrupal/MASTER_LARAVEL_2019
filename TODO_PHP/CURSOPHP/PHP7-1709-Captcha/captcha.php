<?php  
session_start();
//establecer el contenido
header("Content-Type: image/png");

//Crear el objeto de la imagen
$img = imagecreatetruecolor(159, 30);

//Crear colores
$blanco = imagecolorallocate($img, 255, 255, 255);
$gris = imagecolorallocate($img, 128, 128, 128);
$negro = imagecolorallocate($img, 0, 0, 0);
$amarillo = imagecolorallocate($img, 255, 255, 0);
//
imagefilledrectangle($img, 0, 0, 399, 29, $blanco);

//desplegar el rectángulo
imagepng($img);
imagedestroy($img);
?>