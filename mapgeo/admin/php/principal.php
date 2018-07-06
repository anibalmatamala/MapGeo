<?php
 
require_once('ClasePrincipal.php');
 
$codigo=$_POST['codigo'];

$nombre=$_POST['nombre'];

$escala=$_POST['escala'];

$edicion=$_POST['edicion'];

$tamano=$_POST['tamano'];

$estado=$_POST['estado'];

$descripcion=$_POST['descripcion'];
 
$principal = new ClasePrincipal();

$reg = $principal->ingresarPlano($codigo, $nombre, $escala, $edicion, $tamano, $estado, $descripcion);

if ($reg) {

    header("location:../principal.php");

}else{

    echo "fallo"; 
}    
 
?>