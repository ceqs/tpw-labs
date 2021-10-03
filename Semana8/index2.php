<?php
    //recibe valores usuario y clave y los almacena en variables
    $usuario= $_REQUEST['usuario'];
    $clave= $_REQUEST['contraseña'];
    
    require 'funciones.php';
    $conn =conectar();
    //echo "Tu nombre es ".$usuario. ".";
    
    $can= validarUsuario($usuario,$clave,$conn);
    //Caso registrado-mandar a ingreso
    if($can >0){
        session_start();
        $_SESSION['usuario'] = $usu;
        setcookie("cookie", "$usu", time() + 60 * 2, "/" ,"localhost");
        header("location: ingreso.php");
    }
    //Caso no registrado-regresar a index.php
    else {
        header("location: index.php");
    }
?>