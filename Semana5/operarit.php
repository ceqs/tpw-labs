<!DOCTYPE html>
<html>
	<head>
		<title>Semana 5 - Operadores Aritméticas</title>
	</head>
	<body>
	<?php
	$nro1= $_GET['nro1'];
	$nro2= $_GET['nro2'];
	$suma= $nro1 + $nro2;
	$resta= $nro1 - $nro2;
	$mult= $nro1 * $nro2;
	$div= $nro1 / $nro2;
	$residuo= $nro1 % 2;
	$increment= $nro1;
	$increment++;
	$decrement= $nro2;
	$decrement--;
	echo "<hr>La suma de ".$nro1." + ".$nro2." es: $suma";
	echo "<hr>La resta de ".$nro1." - ".$nro2." es: $resta";
	echo "<hr>La multiplicación de ".$nro1." * ".$nro2." es: $mult";
	echo "<hr>La división de ".$nro1." / ".$nro2." es: $div";
	echo "<hr>El residuo de ".$nro1." con 2 es: $residuo";
	echo "<hr>El incremento de ".$nro1." es: $increment";
	echo "<hr>El decremento de ".$nro2." es: $decrement";
	?>
	</body>
</html>