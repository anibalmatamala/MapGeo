<?php
 
require_once('ClaseUsuario.php');
 
$codigo=$_POST['codigo'];

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$email=$_POST['email'];

$telefono=$_POST['telefono'];

$usuario=$_POST['usuario'];

$clave=$_POST['clave'];
 
$user = new ClaseUsuario();

$reg = $user->ingresarUsuario($nombre, $apellido, $email, $telefono, $usuario, $clave);

if ($reg) {

    header("location:../usuario.php");

}else{

    echo "fallo"; 
}    
 
?>