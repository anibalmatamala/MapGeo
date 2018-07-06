<?php

    define('DB_HOST', 'localhost');

    define('DB_USUARIO', 'root');

    define('DB_CLAVE', '');

    define('DB_NOMBRE', 'mapgeo');

    define('DB_CHARSET', 'utf8');

    $conexion = new mysqli("localhost", "root", "", "mapgeo");

    if($conexion->connect_errno){
        
        echo "Fallo la conexión " . $conexion->connect_errno;
    }

    $conexion->set_charset("utf8");

    $sql = ""

?>