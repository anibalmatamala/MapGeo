<?php

if (isset($_GET["buscar"])) {

      $busqueda=$_GET["buscar"];  

        require "admin/php/ClasePrincipal.php";

        $planos = new ClasePrincipal();
    
        $array_planos = $planos->listar();

} else {
        
        require "admin/php/ClasePrincipal.php";

        $planos = new ClasePrincipal();
    
        $array_planos = $planos->listarPlano();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Cartográfico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/css/main.css">
    <link rel="stylesheet" href="admin/css/img.css">
    <link rel="stylesheet" href="admin/css/navbarlector.css">

</head>
<body>
<?php 
        include('admin/navbar/navlector.php'); /* realiza la ejecucion del navbar*/    
        
    ?>

    <img src="admin/img/mapasrollos.jpg" id="rollo" >
</div>

    
    
    <main>
        <h3 class="titulo text-center" >Material cartográfico existente</h3>
        
        <table width="50%" border="1" align="center"  class="thead-dark">
        
 
        <thead>    
            <tr>
                <th scope="col">Id</th>

                <th scope="col">Nombre</th>

                <th scope="col">Escala</th>

                <th scope="col">Edición</th>

                <th scope="col">Tamaño</th>

                <th scope="col">Estado</th>

                <th scope="col">Descripción</th>

                
            </tr>
        </thead> 
        
        
        <?php
                    foreach ($array_planos as $elemento){
                        echo "<tr><td>";
                        echo $elemento['CODIGO_PLANO'] . "</td><td>";
                        echo $elemento['NOMBRE_PLANO'] . "</td><td>";
                        echo $elemento['ESCALA'] . "</td><td>";
                        echo $elemento['EDICION'] . "</td><td>";
                        echo $elemento['TAMANO'] . "</td><td>";
                        echo $elemento['ESTADO'] . "</td><td>";
                        echo $elemento['DESCRIPCION'] . "</td>
                        </td></tr>";
                        echo "<br>";
                    }
                ?>
                
    </table>
    </main>
    <p class="mt-5 mb-3 text-muted text-center">MapGeo &copy; 2018</p>
</body>
</html>