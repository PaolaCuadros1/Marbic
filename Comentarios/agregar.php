<?php
    //Todo lo que escribamos acá será código PHP.

    include_once('../Config/config.php');
    include_once('comentario.php');

    if ( isset($_POST) && !empty($_POST) ){
        $nuevo_comentario = new Comentario(); 
        $nuevo_comentario->crear_comentario($_POST);
 
        if ($nuevo_comentario){
            echo "Muy bien, comentario guardado";
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
    <h1 class="text-center mt-5">Agregar nuevo comentario</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for=""></label>
                <input id="nombre" name="nombre" class="nombre form-control" placeholder="Nombre" >
            </div>
            <div class="mb-3">
                <label for=""></label>
                <input id="apellido" name="apellido" class="apellido form-control" placeholder="Apellido">
            </div>
            <div class="mb-3">
                <label for=""></label>
                <input id="tipo_de_comentario" name="tipo_de_comentario" class="tipo_de_comentario form-control"
                    placeholder="Tipo de comentario">
            </div>
            <div class="mb-3">
                <label for=""></label>
                <textarea class="mensaje form-control" name="comentario" id="comentario" cols="30" rows="5"
                    placeholder="Mensaje"></textarea>
            </div>
            <div class="mb-3">
                <label for=""></label>
                <input id="fecha" type="date" name="fecha" class="fecha form-control" placeholder="Fecha">
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