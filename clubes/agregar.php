<?php
include_once('../clubes/ver.php');
include_once('clubes.php');
if ( isset($_POST) && !empty($_POST) ){
    $nuevo_clubes = new clubes(); 
    $nuevo_clubes->crear_clubes($_POST);

    if ($nuevo_clubes){
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
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">

    <title>Document</title>
</head>

<body>
    <?php
     include('../menu.php');
   ?>
    <div class="container">

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
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="rol" name="rol">
                    <option selected>seleccione un rol</option>
                    <option value="1">administrativo</option>
                    <option value="2">profesor</option>
                    <option value="3">estudiante</option>
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>

</html>