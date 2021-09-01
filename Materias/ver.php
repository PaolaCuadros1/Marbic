<?php

include_once('../Config/config.php');
include_once('materias.php');
$materias = new materias ();
$todas_las_materias = $materias->ver_materias();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php
       
       include('../menu.php');
       ?>
  
    <div class="container">
        <h1 class=text-center>Todas las materias</h1>
        <table class="table">

            <thead>
                <tr>

                    <th>MATERIA</th>
                    <th>PROFESOR DE LA MATERIA</th>
                    <th>GRADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php 
          while ($info_materias= mysqli_fetch_object($todas_las_materias) ){
     echo "<tr>";
     echo "<td> $info_materias->Materia </td>";
     echo "<td> $info_materias->profesor </td>";
     echo "<td> $info_materias->grado </td>";
     echo "<td><a href=' ".ROOT."/Materias/eliminar.php?id=".$info_materias->id."' class=' btn btn-danger'> X </a></td>";
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