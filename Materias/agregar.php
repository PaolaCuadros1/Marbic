<?php

include_once('../Config/config.php');
include_once('materias.php');

$seGuardo = false;
if ( isset($_POST) && !empty($_POST) ){
    $nuevas_materias = new materias(); 
    $nuevas_materias->crear_materias($_POST);

if ($nuevas_materias){
    $seGuardo = true;
    }
 }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>


<body>
    <?php
    include('../menu.php');
    if ( $seGuardo == true ){
        echo "Muy bien, materia guardado";
       }
?>
    <div class="container">
        <h1 class="text-center mt-5">Agregar nueva materia</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="Materia" name="Materia">
                    <option selected>Seleccione una Materia</option>
                    <option value="Direcciòn de curso">Direcciòn de curso</option>
                    <option value="Ética">Ética</option>
                    <option value="Matemàticas">Matemàticas</option>
                    <option value="Ciencias naturales">Ciencias naturales</option>
                    <option value="Ciencias sociales">Ciencias sociales</option>
                    <option value="Artes">Artes</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Español">Español</option>
                    <option value="Educaciòn fìsica">Educaciòn fìsica</option>
                    <option value="Tecnologìa">Tecnologìa</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="profesor" class="form-label">Profesor materia</label>
                <input type="text" class="form-control" id="profesor" name="profesor" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="grado" class="form-label">grado</label>
                <input type="number" class="form-control" id="grado" name="grado" aria-describedby="emailHelp">
            </div>


            <div class="mb-3">

                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
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