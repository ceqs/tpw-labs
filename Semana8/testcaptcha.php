<?php
    $message = "";
    if(isset($_POST["captcha"])) {
        $cookie_captcha = $_COOKIE["captcha"];
        $captcha = sha1($_POST["captcha"]);
        if($captcha != $cookie_captcha) {
            $message = "El codigo catpcha ingresado es incorrecto<br><br>";
        }
        else {
            $message = "<b>El codigo ingresado es correcto</b><br><br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
</head>
<body>
    <div><?=$message?></div>
    <form method="post" action="testcaptcha.php">
        <label for="captcha">Ingrese captcha</label>
        <input id="captcha" type="text" name="captcha">
        <img src="captcha.php" alt="">
        <br>
        <input type="submit" value="Validar">
    </form>
</body>
</html>