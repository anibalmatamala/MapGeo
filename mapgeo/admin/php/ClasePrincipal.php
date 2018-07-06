<?php

    require "conexion.php";

    class ClasePrincipal extends conexion{

        protected $codigo;

        protected $nombre;

        protected $escala;

        protected $edicion;

        protected $tamano;

        protected $estado;
        
        protected $descripcion;

        public function ClasePrincipal(){

            parent::__construct();
        }

        public function ingresarPlano($codigo, $nombre, $escala, $edicion,$tamano ,$estado, $descripcion ){

            $sql="INSERT INTO plano(CODIGO_PLANO, NOMBRE_PLANO, ESCALA, EDICION, TAMANO, ESTADO, DESCRIPCION) VALUES('".$codigo."','".$nombre."','".$escala."','".$edicion."','".$tamano."','".$estado."','".$descripcion."')";

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
        public function listar(){
            $busqueda=$_GET["buscar"];

            $resultado=$this->conexion_db->query("SELECT * FROM plano WHERE NOMBRE_PLANO LIKE '%$busqueda'");

            $planos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $planos;
            
        }
            public function listarPlano(){

            $resultado=$this->conexion_db->query('SELECT * FROM plano');

            $planos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $planos;
        }

        public function eliminarPlano($codigo){

            $sql="DELETE FROM plano WHERE CODIGO_PLANO='".$codigo."'";

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

        public function modificarPlano($codigo, $nombre, $escala, $edicion, $tamano, $estado, $descripcion){

            $sql="UPDATE plano SET NOMBRE_PLANO='".$nombre."', ESCALA='".$escala."', EDICION='".$edicion."', TAMANO='".$tamano."', ESTADO='".$estado."', DESCRIPCION='".$descripcion."' WHERE CODIGO_PLANO='".$codigo."'";

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
