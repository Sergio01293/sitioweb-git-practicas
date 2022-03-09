<?php 
    class conexion{
        private $servidor = "127.0.0.1";
        private $usuario = "root";
        private $contrasenia = "";
        private $conexion;

        public function __construct(){
            try{
                $this->conexion  = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->contrasenia);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                return "Fallo de conexion a la base de datos".$e;
            }
        }

        public function ejecutar($sql){
            $this->conexion->exec($sql);
            //Nos retorna un id insertado
            return $this->conexion->lastInsertId();
        }
    }
?>