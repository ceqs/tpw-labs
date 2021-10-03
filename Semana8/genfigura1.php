<?php 
header("Content-type: image/png"); 
$imagen = imagecreate(100,100); 
$color_fondo = imagecolorallocate($imagen, 255, 255, 0); 
imageline($imagen, 10, 90, 90, 10, imagecolorallocate($imagen, 0, 0, 0));
imagepng($imagen); 
imagedestroy($imagen); 
?>