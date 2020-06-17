<?php
    class conexion{
        private $servidor = "localhost";
        private $usuario = "root";
        private $pass = "";
        private $db = "db_sistema";

        public function conexion1(){
            $conex = mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->db);
        //    if ($conex) {
        //        echo "entro";
        //    }else{
        //        echo "error";
        //    }
        return $conex;
        }
    }
   
?>