<?php

require_once('ClasePrincipal.php');
 
$codigo=$_GET['codigo'];

$principal = new ClasePrincipal();

$reg = $principal->eliminarPlano($codigo);

if($reg){

    header('location:../principal.php');
   }else{

   echo "No se elimino el registro";
   }

?>