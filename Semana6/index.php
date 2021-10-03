<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 6</title>
</head>
    <body>
        <!--Todo realizado en un mismo documento-->
        <form action="index.php" method="get">
            <!--Text box para apellidos-->    
            <label>Apellidos</label>
            <input type="text" name="apellido"><br>
            <!--Text box para nombres-->
            <label>Nombres</label>
            <input type="text" name="nombre"><br><br>
            <input type="submit" value="Enviar">
        </form>
        <!--Codigo php para mostrar apellidos y nombre-->
        <?php 
            $apellido = isset($_GET['apellido']);
            $nombre = isset($_GET['nombre']);
        
            if(empty($_GET['apellido']) && empty($_GET['$nombre'])){
                echo "Faltan datos";
            }
            else {
            echo "Tu apellido es: ".$_GET['apellido']."." ;
            echo "<br> Tu nombre es: ".$_GET['nombre']. ".";
            }
        ?>
    </body>
</html>