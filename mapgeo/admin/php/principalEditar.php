<?php
 
    require_once('ClasePrincipal.php');

    $codigo=$_POST['codigo'];

    $nombre=$_POST['nombre'];

    $escala=$_POST['escala'];

    $edicion=$_POST['edicion'];

    $tamano=$_POST['tamano'];

    $estado=$_POST['estado'];

    $descripcion=$_POST['descripcion'];
    
    $modifica = new ClasePrincipal();

    $resultado = $modifica->modificarPlano($codigo, $nombre, $escala, $edicion, $tamano, $estado, $descripcion);
    
    if($resultado){

    header('location:../principal.php');
    
    }else{

    echo "no se modifico";
    }
 
?>