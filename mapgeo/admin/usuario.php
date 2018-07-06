<?php  

    require "php/ClaseUsuario.php";

    $usuario = new ClaseUsuario();    
    
    $array_usuarios = $usuario->listarUsuario();        
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de usuario</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <legend>Formulario de usuario para el sistema</legend>
        <section>
            <form class="form-control" action="php/usuario.php" method="POST">
                <fieldset>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Nombre de usuario</th>
                                <th>Contraseña</th>
                                <th colspan="2">Opciones</th>
                            </tr>
                        </thead>

                        <?php foreach($array_usuarios as $usuario):?>      

                        <tbody>
                            <tr>
                                <td><?php echo $usuario['CODIGO_USUARIO'] ?></td>
                                <td><?php echo $usuario['NOMBRE'] ?></td>
                                <td><?php echo $usuario['APELLIDO'] ?></td>
                                <td><?php echo $usuario['EMAIL'] ?></td>
                                <td><?php echo $usuario['TELEFONO'] ?></td>
                                <td><?php echo $usuario['NOMBRE_USUARIO'] ?></td>
                                <td><?php echo $usuario['CLAVE'] ?></td>
                                <td class="bot"><a href="php/usuarioEliminar.php?codigo=<?php echo $usuario['CODIGO_USUARIO'] ?>"><input type='button' class="form-control btn btn-outline-danger" name='del' id='del' value='Borrar'></a></td>
                                <td class='bot'><a href="editar-usuario.php?codigo=<?php echo $usuario['CODIGO_USUARIO']; ?> & nombre=<?php echo $usuario['NOMBRE']; ?> & apellido=<?php echo $usuario['APELLIDO']; ?> & email=<?php echo $usuario['EMAIL']; ?> & telefono=<?php echo $usuario['TELEFONO']; ?> & usuario=<?php echo $usuario['NOMBRE_USUARIO']; ?> & clave=<?php echo $usuario['CLAVE']; ?>"><input type='button' class="form-control btn btn-outline-primary" name='up' id='up' value='Actualizar'></a></td>
                            </tr> 
                            
                        <?php endforeach; ?>

                            <tr>
                                <td></td>
                                <td><input type='text' name='nombre' size='10' class='form-control' required></td>
                                <td><input type='text' name='apellido' size='10' class='form-control' required></td>
                                <td><input type='email' name='email' size='10' class='form-control' required></td>
                                <td><input type='text' name='telefono' size='10' class='form-control' required></td>
                                <td><input type='text' name='usuario' size='10' class='form-control' required></td>
                                <td><input type='text' name='clave' size='10' class='form-control' required></td>
                                <td class='bot'><input type='submit'class=" form-control btn btn-outline-success" name='cr' id='cr' value='Insertar'></td>
                                
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