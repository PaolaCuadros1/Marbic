<?php

include_once('../config/config.php');
include_once('salones.php'); //llamamos al archivo

  $salones = new salones();
  $todos_los_salones = $salones->ver_salones();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver salones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php
include('../menu.php');
?>
    <div class="container">
        <h1 class="text-center mt-5">Agregar salón nuevo</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE del salon</th>
                    <th>NUMERO SILLAS</th>
                    <th>MUMERO MESAS</th>
                    <th>NUMERO MESAS GRANDE</th>
                    <th>NUMERO TELEVISOR</th>
                    <th>NUMERO PUERTA CORREDIZA</th>
                    <th>NUMERO MICROSCOPIO</th>
                    <th>NUMERO ANTIBACTERIAL</th>
                    <th>NUMERO TOALLAS</th>
                    <th>NUMERO BALONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
          while ($info_salones = mysqli_fetch_object($todos_los_salones) ) {
            echo "<tr";  
            echo "<tr $info_salones->id </tr>"; 
            echo "<tr $info_salones->nombre_del_salon </tr>"; 
            echo "<tr $info_salones->numero_sillas </tr>"; 
            echo "<tr $info_salones->numero_mesas</tr>"; 
            echo "<tr $info_salones->numero_mesas_grande </tr>"; 
            echo "<tr $info_salones->numero_televisor </tr>"; 
            echo "<tr $info_salones->numero_puerta_corrediza </tr>"; 
            echo "<tr $info_salones->numero_microscopio </tr>"; 
            echo "<tr $info_salones->numero_antibactarial </tr>"; 
            echo "<tr $info_salones->numero_toallas </tr>"; 
            echo "<tr $info_salones->numero_balones</tr>"; 
            echo "<td><a href='".ROOT."/salones/eliminar.php?id=".$info_salones->id."' class=' btn btn-danger' > X </a>    </td>";

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