<?php
    $message = "";
    if(isset($_REQUEST["accion"])) {
        $action = $_REQUEST["accion"];
        if($action == "Crear") {
            $duracion = $_REQUEST['duracion'];
            setcookie("cookieTemporal", time()+$duracion, time()+$duracion);
            $message = "La cookie se destruirá en: ".strval($duracion);
        }
        else if($action == "Destruir") {
            setcookie("cookieTemporal", "", time() - 3600);
            $message = "Se ha destruido la cookie";
        }
        else {
            if (isset($_COOKIE["cookieTemporal"])) {
                $tiempoRestante = $_COOKIE["cookieTemporal"] - time();
                $message = "<p>La cookie se destruirá en $tiempoRestante";
            }
            else {
                $message = "No existe la cookie";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 7</title>
</head>
<body>
  <h1>Creación y destrucción de cookies</h1>
    <div><?=$message?></div>
    <form method="GET" action="cookies.php">
        <p>Elija una opción</p>

        <ul>
            <li>Crear una cookie con una duración de
                <input type="text" name="duracion" value="60" size="3" maxlength="2" autofocus>
                segundos (entre 1 y 60)
                <input type="submit" value="Crear" name="accion">
            </li>
            <li>Comprobar la cookie
                <input type="submit" value="Comprobar" name="accion">
            </li>
            <li>Destruir la cookie
                <input type="submit" value="Destruir" name="accion">
            </li>
        </ul>
    </form>
</body>
</html>