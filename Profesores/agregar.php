<?php

include_once('../Config/config.php');
include_once('profesores.php');

if ( isset($_POST) && !empty($_POST) ){
    $nuevo_profesor = new profesores(); 
    $nuevo_profesor->crear_profesor($_POST);

if ($nuevo_profesor){
        echo "Muy bien, usuario guardado";
    }
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>


<body>
    <?php
    include('../menu.php');
?>
    <div class="container">
        <h1 class="text-center mt-5">Agregar nuevo profesor</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo electronico</label>
                <input type="text" class="form-control" id="correo_electronico" name="correo_electronico"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="lugar_de_nacimiento" class="form-label">Lugar de nacimiento</label>
                <input type="text" class="form-control" id="lugar_de_nacimiento" name="lugar_de_nacimiento"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="fecha_de_nacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="foto_perfil" class="form-label">foto perfil</label>
                <input type="text" class="form-control" id="foto_perfil" name="foto_perfil"
                    aria-describedby="emailHelp">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

</html>