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
        <form action="procesos/crearUsuario.php" method="post">

            <div class="form-group">
                <label >Nombre</label>
                <input  type="text" 
                        class="form-control"
                        name="nombre">
            </div>

            <div class="form-group">
                <label >Apellido</label>
                <input  type="text" 
                        class="form-control"
                        name="apellido">
            </div>

            <div class="form-group">
                <label >Email</label>
                <input  type="email" 
                        class="form-control"
                        name="email">
            </div>

            <div class="form-group">
                <label >Password</label>
                <input  type="password" 
                        class="form-control"
                        name="password">
            </div>
            <div class="text-center">
                <button class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>



        <table class="table text-center mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">correo</th>
                    <th scope="col">herramientas</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once("clases.php");
                $obj= new Usuario();
                $data = $obj->mostrarUsuario();
                foreach ($data as $key) {
                    # code...
            ?>
                <tr>
                    <th scope="row"> <?php echo $key['id']?>  </th>
                    <td><?php echo $key['nombre']?></td>
                    <td><?php echo $key['apellido']?></td>
                    <td><?php echo $key['email']?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $key['id']?>" class="btn btn-outline-primary">Editar</a>
                        <a href="eliminar.php?id=<?php echo $key['id']?>" class="btn btn-outline-danger">Eliminar</a>
                    </td>
                </tr>
                
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>