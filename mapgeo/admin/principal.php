<?php

    require "php/ClasePrincipal.php";

    $planos = new ClasePrincipal();

    $array_planos = $planos->listarPlano();
     
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Cartográfico</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/img.css">
</head>
<body>
<?php    
        session_start();
        if(!isset($_SESSION["usuario"])){

            header("location:index.php");

        }
?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="principal.php">Material Cartográfico <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="usuario.php">Usuario</a>
                <a class="nav-item nav-link" href="php/cierresesion.php">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
    </header>   

    <main>
    <img src="admin/img/mapasrollos.jpg" id="rollo" >
    <legend>Formulario de Material Cartográfico</legend>    
    <section>
            <form class="form-control" action="php/principal.php" method="POST">
                <fieldset>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Escala</th>
                                <th>Edición</th>
                                <th>Tamaño</th>
                                <th>Estado</th>
                                <th>Descripción</th>
                                <th colspan="2">Opciones</th>
                            </tr>
                        </thead>

                        <?php foreach($array_planos as $plano):?>      

                        <tbody class="">
                            <tr>
                                <td><?php echo $plano['CODIGO_PLANO'] ?></td>
                                <td><?php echo $plano['NOMBRE_PLANO'] ?></td>
                                <td><?php echo $plano['ESCALA'] ?></td>
                                <td><?php echo $plano['EDICION'] ?></td>
                                <td><?php echo $plano['TAMANO'] ?></td>
                                <td><?php echo $plano['ESTADO'] ?></td>
                                <td><?php echo $plano['DESCRIPCION'] ?></td>
                                <td class="bot"><a href="php/principalEliminar.php?codigo=<?php echo $plano['CODIGO_PLANO'] ?>"><input type='button' class="form-control btn btn-outline-danger" name='del' id='del' value='Borrar'></a></td>
                                <td class='bot'><a href="editar-plano.php?codigo=<?php echo $plano['CODIGO_PLANO']; ?> & nombre=<?php echo $plano['NOMBRE_PLANO']; ?> & escala=<?php echo $plano['ESCALA']; ?> & edicion=<?php echo $plano['EDICION']; ?> & tamano=<?php echo $plano['TAMANO']; ?> & estado=<?php echo $plano['ESTADO']; ?> & descripcion=<?php echo $plano['DESCRIPCION']; ?>"><input type='button' class="form-control btn btn-outline-primary" name='up' id='up' value='Actualizar'></a></td>
                            </tr> 
                            
                        <?php endforeach; ?>

                            <tr>
                                <td><input type='text' name='codigo' size='10' class='form-control' required></td>
                                <td><input type='text' name='nombre' size='10' class='form-control'required></td>
                                <td><input type='text' name='escala' size='10' class='form-control'required></td>
                                <td><input type='text' name='edicion' size='10' class='form-control'required></td>
                                <td><input type='text' name='tamano' size='10' class='form-control'required></td>
                                <td>
                                    <select name="estado" class="custom-select" id="">
                                        <option value="No disponible">No disponible</option> 
                                        <option value="Disponible" selected>Disponible</option>
                                    </select>
                                </td>
                                <td> <textarea name="descripcion" class="form-control" cols="30" rows="2"></textarea>  </td>
                                <td class='bot'><input type='submit' class="form-control btn btn-outline-success" name='cr' id='cr' value='Insertar'></td>
                                
                            </tr> 
                        </tbody>   
                    </table>   
                </fieldset>  
            </form>         
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>