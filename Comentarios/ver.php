<?php 

    include_once('../Config/config.php');
    include_once('comentario.php'); //Llamamos al archivo Usuario.php

    $comentario = new Comentario();
    $todos_los_comentarios = $comentario->ver_comentarios();

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
    <title>Ver comentarios</title>
</head>

<body>
    <?php
        include('../menu.php');
    ?>
    <div class="container">
        <h1 class="text-center mt-5">Todos los comentarios</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>FECHA</th>
                    <th>TIPO DE COMENTARIO</th>
                    <th>COMENTARIO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ( $info_comentario = mysqli_fetch_object($todos_los_comentarios) ){
                    echo "<tr>";
                    echo "<td> $info_comentario->id </td>";
                    echo "<td> $info_comentario->nombre </td>";
                    echo "<td> $info_comentario->apellido </td>";
                    echo "<td> $info_comentario->fecha </td>";
                    echo "<td> $info_comentario->tipo_de_comentario </td>";
                    echo "<td> $info_comentario->comentario </td>";
                    echo "<td><a href='".ROOT."/Comentarios/eliminar.php?id=".$info_comentario->id."' class=' btn btn-danger' > X </a>    </td>";
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