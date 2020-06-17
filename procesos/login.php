<?php
    require_once "../conexion.php";
    $obj = new conexion();
    $conexion = $obj->conexion1();
    // $correo = $_POST['email'];
    // $pass = $_POST['password'];
    $sql = "SELECT email,password FROM usuariocrud  where email='andres_marin1992@hotmail.com' and password='Emiliano20414.'";
    $resultado = mysqli_query($conexion,$sql);
    $ver=  mysqli_fetch_row($resultado );
   
    if($ver == true){
        echo "si existe";
    }else{
        echo "el usuario y contraseña son incorrectos";
    }

?>