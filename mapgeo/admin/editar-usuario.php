<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Material Cartográfico</title>
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
            <h3>Actualizar Usuario</h3>

        <form class="form-control" action="php/usuarioEditar.php" method="POST">

            <label for="">
                <input type="hidden" name="codigo" id="" value="<?php echo $codigo ?>">
            </label>

            <label  for="">Nombre
                <input class="form-control row" type="text" name="nombre" id="" value="<?php echo $nombre ?>">
            </label>

            <label for="">Apellido
                <input class="form-control row"type="text" name="apellido" id="" value="<?php echo $apellido ?>">
            </label>

            <label for="">Email
                <input class="form-control row"type="text" name="email" id="" value="<?php echo $email ?>">
            </label>

            <label for="">Teléfono
                <input class="form-control row" type="text" name="telefono" id="" value="<?php echo $telefono ?>">
            </label>

            <label for="">Usuario
                <input class="form-control row" type="text" name="usuario" id="" value="<?php echo $usuario ?>">
            </label>

            <label  for="">Clave
                <input class="form-control row" type="text" name="clave" id="" value="<?php echo $clave ?>">
                        </label>                    
                        <input class= "btn btn-primary"  type="submit" name="actualizar" value="Actualizar">
                    
        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>