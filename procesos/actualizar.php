<?php
    require_once "../clases.php";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $id = $_POST['id'];

    $obj = new Usuario();
    if ($obj->actualizarUsuario($id,$nombre,$apellido,$pass,$email)==1) {
        header("location:../index.php");
    }else{
        echo "error";
    };
?>