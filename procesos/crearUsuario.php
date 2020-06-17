<?php 

    require_once "../conexion.php";
    require_once "../clases.php";
    $obj = new conexion();
    $objUsuario = new Usuario();
    $obj->conexion1();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $pass = $_POST['password'];
    $email = $_POST['email'];


    if ($objUsuario->creariUsuario($nombre,$apellido,$pass,$email) == 1) {
        header("location:../index.php");
    }else{
        echo "fallo al eliminar";
    }
    

?>
