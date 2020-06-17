<?php
    require_once "clases.php";

    $obj = new Usuario();
    $id = $_GET['id'];
   
    if ($obj->eliminarUsuario($id) == 1) {
        header("location:index.php");
    }else{
        echo "fallo al eliminar";
    }
    

?>