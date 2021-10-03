<?php 
header("Content-type: image/png"); 
$imagen = imagecreate(300,200); 
$color_fondo = imagecolorallocate($imagen, 0, 0, 255);
imageellipse($imagen, 150, 100, 200, 100, imagecolorallocate($imagen, 255, 255, 0));
imagepng($imagen); 
imagedestroy($imagen); 
?>