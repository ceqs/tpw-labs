<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
sd
<?php 
$anchoImagen = 450; 
$altoImagen = 400; 
$imagen = imagecreate($anchoImagen, $altoImagen); 
$color= #000000;
$negro = imagecolorallocate($imagen, 0, 0, 0); 
imagesetpixel($imagen, 1, 2, $color);

?>
 
</body>
</html>