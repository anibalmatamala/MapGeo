<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar plano</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <?php
        
        $codigo=$_GET["codigo"];

        $nombre=$_GET["nombre"];

        $escala=$_GET["escala"];

        $edicion=$_GET["edicion"];

        $tamano=$_GET["tamano"];

        $estado=$_GET["estado"];

        $descripcion=$_GET["descripcion"];

    ?>
    <header>

    </header>
    <section>
        <h1>Actualizar plano</h1>

        <form class="form-control" action="php/principalEditar.php" method="POST">

            <label for="">
                <input type="hidden" name="codigo" id="" value="<?php echo $codigo ?>">
            </label>

            <label for="">Nombre
                <input class="form-control row" type="text" name="nombre" id="" value="<?php echo $nombre ?>">
            </label>

            <label for="">Escala
                <input class="form-control row" type="text" name="escala" id="" value="<?php echo $escala ?>">
            </label>

            <label for="">Edición
                <input class="form-control row" type="text" name="edicion" id="" value="<?php echo $edicion ?>">
            </label>

            <label for="">Tamaño
                <input class="form-control" type="text" name="tamano" id="" value="<?php echo $tamano ?>">
            </label>

            <label for="">Estado
                <select name="estado" id="" class="form-control">
                    <option value="No disponible">No disponible</option> 
                    <option value="Disponible" selected>Disponible</option>
                </select>
            </label>

            <label for="">Descripción
                <textarea class="form-control" name="descripcion"cols="30" rows="5"><?php echo $descripcion ?></textarea>
            </label>

            <input class=" btn-primary form-control column" type="submit" name="actualizar" value="Actualizar">

        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>