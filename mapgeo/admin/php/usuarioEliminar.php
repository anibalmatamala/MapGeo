<?php

require_once('ClaseUsuario.php');
 
$codigo=$_GET['codigo'];

$user = new ClaseUsuario();

$reg = $user->eliminarUsuario($codigo);

if($reg){

    header('location:../usuario.php');
   }else{

   echo "No se elimino el registro";
   }

?>