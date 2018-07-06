<?php
 
    require_once('ClaseUsuario.php');

    $codigo=$_POST['codigo'];

    $nombre=$_POST['nombre'];

    $apellido=$_POST['apellido'];

    $email=$_POST['email'];

    $telefono=$_POST['telefono'];

    $usuario=$_POST['usuario'];

    $clave=$_POST['clave'];
    
    $modifica = new ClaseUsuario();

    $resultado = $modifica->modificarUsuario($codigo, $nombre, $apellido, $email, $telefono, $usuario, $clave);
    
    if($resultado){

    header('location:../usuario.php');
    
    }else{

    echo "no se modifico";
    }
 
?>