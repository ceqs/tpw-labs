<?php
    //Conexion a la bd
    function conectar() {
        $conn= mysqli_connect ("localhost", "root", "", "usuariosdb");
        return $conn; 
    }
    
    //consulta para validar existencia de usuario
    function validarUsuario($nom,$clave,$conn){
        $sql="select * from usuarios where nombre='$nom' and clave='$clave'";
        $res=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $can=mysqli_num_rows($res);
        return $can;
    }
    //verificacion de sesion iniciada con nombre de usuario
    function sesionIniciada(){
        session_status();
    }
?>