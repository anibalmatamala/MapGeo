<?php

    require "conexion.php";

    class ClaseUsuario extends conexion{

        protected $codigo;

        protected $nombre;

        protected $apellido;

        protected $email;

        protected $telefono;

        protected $usuario;

        protected $clave;

        public function ClaseUsuario(){

            parent::__construct();
        }

        public function ingresarUsuario($nombre, $apellido, $email, $telefono, $usuario, $clave ){

            $sql="INSERT INTO usuario (NOMBRE, APELLIDO, EMAIL, TELEFONO, NOMBRE_USUARIO, CLAVE) VALUES('".$nombre."','".$apellido."','".$email."','".$telefono."','".$usuario."','".$clave."')";

            $resultado=$this->conexion_db->prepare($sql);
            
            $re=$resultado->execute();
            
            if (!$re) {
   
                echo "fallo el ingreso de datos ";

            }else{
    
                return $re;
    
                $re->close();
    
                $this->conexion_db->close();

            }

        }

        public function listarUsuario(){

            $resultado=$this->conexion_db->query('SELECT * FROM usuario');

            $planos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $planos;
        }

        public function eliminarUsuario($codigo){

            $sql="DELETE FROM usuario WHERE CODIGO_USUARIO='".$codigo."'";

            $elimina=$this->conexion_db->prepare($sql);

            $re = $elimina->execute();
            
            if (!$re) {
   
                echo "No se logro eliminar ";

            }else{
    
                return $re;
    
                $re->close();
    
                $this->conexion_db->close();

            }
        }

        public function modificarUsuario($codigo, $nombre, $apellido, $email, $telefono, $usuario, $clave){

            $sql="UPDATE usuario SET NOMBRE='".$nombre."', APELLIDO='".$apellido."', EMAIL='".$email."',TELEFONO='".$telefono."', NOMBRE_USUARIO='".$usuario."', CLAVE='".$clave."' WHERE CODIGO_USUARIO='".$codigo."'";

            $modificar=$this->conexion_db->prepare($sql);

            $re=$modificar->execute();
            
            if (!$re) {
   
                echo "No se logro actualizar ";

            }else{
    
                return $re;
    
                $re->close();
    
                $this->conexion_db->close();

            }
        }
    }   
?>

