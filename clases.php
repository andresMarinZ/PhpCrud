<?php
    require_once "conexion.php";
    class Usuario{
        private $_id;
        private $_nombre;
        private $_apellido;
        private $_pass;
        private $_email;
        private $conexion;

        public function __construct(){
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->conexion1();
        }

        public function creariUsuario($nombre, $apellido, $pass, $email){
            $this->_nombre = $nombre;
            $this->_apellido = $apellido;
            $this->_pass = $pass;
            $this->_email = $email;
           
            $sql = "INSERT INTO usuariocrud(nombre, apellido, password, email) VALUES ('$this->_nombre','$this->_apellido','$this->_pass','$this->_email')";
            return $this->conexion->query($sql);
        }

        public function mostrarUsuario(){
            $sql = "SELECT * FROM usuariocrud";
            $resultado = $this->conexion->query($sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }

        public function actualizarUsuario($id,$nombre, $apellido, $pass, $email ){
            $sql = "UPDATE usuariocrud SET nombre='$nombre',apellido='$apellido',password='$pass',email='$email' WHERE id='$id'";
            return $this->conexion->query($sql);
        }

        public function eliminarUsuario($id){
            $sql = "DELETE FROM usuariocrud WHERE id='$id'";
            return $this->conexion->query($sql);
        }
        
    }
?>