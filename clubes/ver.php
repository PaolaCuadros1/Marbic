<?php

include_once('../Config/config.php');
include_once('clubes.php');

$clubes = new clubes ();
$todos_los_clubes = $clubes->ver_clubes();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php
      include('../menu.php');
    ?>
    <div class="container">
    <h1 class="text-center mt-5">Todos los clubes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre_del_club</th>
                <th>APELLIDO</th>
                <th>EDAD</th>
                <th>CORREO_ELECTRONICO</th>
                <th>CONTRASENA</th>
                <th>CELULAR</th>
                <th>ROL</th>
            </tr>
        </thead>
        <tbody>
            <?php
           while ( $info_usuario = mysqli_fetch_object($todos_los_clubes) ){
            echo "<tr>";
            echo "<td> $info_clubes->id </td>";
            echo "<td> $info_clubes->nombre_del_club </td>";
            echo "<td> $info_clubes->apellido </td>";
            echo "<td> $info_clubes->edad </td>";
            echo "<td> $info_clubes->Correo_electronico </td>";
            echo "<td> $info_clubes->Contrasena </td>";
            echo "<td> $info_clubes->Celular </td>";
            echo "<td> $info_clubes->Rol </td>";
               echo "<td><a href=' ".ROOT."/clubes/eliminar.php?id=".$info_usuario->id."' class=' btn btn-danger'> X </a></td>";
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