<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'funciones.php';
    ?>
        <form action="index2.php" method="post">
            <label><b>Usuario: </b></label>
            <input type="text" placeholder="Nombre de usuario" name="usuario" required>
            <br><br>
            <label><b>Contraseña: </b></label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required>                
            <button type="submit" value="Enviar" >Enviar</button>
        </form>
</body>
</html>