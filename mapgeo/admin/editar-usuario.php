<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <?php
        
        $codigo=$_GET["codigo"];

        $nombre=$_GET["nombre"];

        $apellido=$_GET["apellido"];

        $email=$_GET["email"];

        $telefono=$_GET["telefono"];

        $usuario=$_GET["usuario"];

        $clave=$_GET["clave"];

    ?>
    <header>

    </header>
    <section>
        <h1>Formulario de usuario</h1>

        <form class="form-control" action="php/usuarioEditar.php" method="POST">

            <fieldset>

                <legend>Actualizar datos del usuario</legend>
                <table class="form-control table">
                        <label for="">
                            <input type="hidden" name="codigo" id="" value="<?php echo $codigo ?>">
                        </label>                   
                        <td><label class="form-control" for="">Nombre
                            <input class="form-control" type="text" name="nombre" id="" value="<?php echo $nombre ?>">
                        </label></td>
                        <td><label class="form-control"for="">Apellido
                           <input class="form-control "type="text" name="apellido" id="" value="<?php echo $apellido ?>">
                        </label></td>                      
                        <td><label class="form-control" for="">Email
                            <input class="form-control"type="text" name="email" id="" value="<?php echo $email ?>">
                        </label></td>
                        <td><label class="form-control" for="">Teléfono
                            <input class="form-control" type="text" name="telefono" id="" value="<?php echo $telefono ?>">
                        </label></td>
                        <td><label class="form-control" for="">Usuario
                            <input class="form-control" type="text" name="usuario" id="" value="<?php echo $usuario ?>">
                        </label></td>
                        <td><label class="form-control"  for="">Clave
                            <input class="form-control" type="text" name="clave" id="" value="<?php echo $clave ?>">
                        </label></td>                    
                        <td><input class=" form-control" type="submit" name="actualizar" value="Actualizar"></td>
                    
                </table>
            </fieldset>
        </form>
    </section>
</body>
</html>