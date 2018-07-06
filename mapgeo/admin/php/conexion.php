<?php

    require ("config.php");

    class Conexion{

        protected $conexion_db;
    

        public function conexion(){

        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CLAVE, DB_NOMBRE);

        if($this->conexion_db->connect_errno){

            echo "Fallo la conexión: " . $this->conexion_db->connect_errno;

            return;        
        }

        $this->conexion_db->set_charset(DB_CHARSET);
        }
    }

?>
