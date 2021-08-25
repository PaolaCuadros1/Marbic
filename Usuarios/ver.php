<?php 

    include_once('../Config/config.php');
    include_once('Usuario.php'); //Llamamos al archivo Usuario.php

    $usuario = new Usuario();
    $todos_los_usuarios = $usuario->ver_usuarios();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <title>Ver usuarios</title>
</head>

<body>
    <?php
        include('../menu.php');
    ?>
    <div class="container">
        <h1 class="text-center mt-5" >Todos los usuarios</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th>CELULAR</th>
                    <th>ROL</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ( $info_usuario = mysqli_fetch_object($todos_los_usuarios) ){
                    echo "<tr>";
                    echo "<td> $info_usuario->id </td>";
                    echo "<td> $info_usuario->nombre </td>";
                    echo "<td> $info_usuario->apellido </td>";
                    echo "<td> $info_usuario->correo_electronico </td>";
                    echo "<td> $info_usuario->celular </td>";
                    echo "<td> $info_usuario->rol </td>";
                    echo "<td><a href='".ROOT."/Usuarios/eliminar.php?id=".$info_usuario->id."' class=' btn btn-danger' > X </a>    </td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

</html>