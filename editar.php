<?php
    require_once "conexion.php";
    $obj = new conexion();
    $conexion = $obj->conexion1();
    $id = $_GET['id'];
    $sql = "SELECT nombre,apellido,email,password,id  FROM usuariocrud  where id='$id'";
    $result = mysqli_query($conexion,$sql);
    $ver=  mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5">
        <form action="procesos/actualizar.php" method="post">

            <div class="form-group">
                <label >Nombre</label>
                <input  type="text" 
                        class="form-control"
                        name="id"
                        value="<?php echo $id?>">
            </div>

            <div class="form-group">
                <label >Nombre</label>
                <input  type="text" 
                        class="form-control"
                        name="nombre"
                        value="<?php echo $ver[0]?>">
            </div>

            <div class="form-group">
                <label >Apellido</label>
                <input  type="text" 
                        class="form-control"
                        name="apellido"
                        value="<?php echo $ver[1]?>">
            </div>

            <div class="form-group">
                <label >Email</label>
                <input  type="email" 
                        class="form-control"
                        name="email"
                        value="<?php echo $ver[2]?>">
            </div>

            <div class="form-group">
                <label >Password</label>
                <input  type="text" 
                        class="form-control"
                        name="password"
                        value="<?php echo $ver[3]?>">
            </div>
            <div class="text-center">
                <button class="btn btn-outline-primary">Editar</button>
                <a href="index.php" class="btn btn-outline-danger">VOLVER</a>
            </div>
        </form>
    </div>
</body>
</html>