<?php 

    include_once('../Config/config.php');
    include_once('Usuario.php'); //Llamamos al archivo Usuario.php

    $usuario = new Usuario();
    
    /** Se llama la función eliminar usuario y se envía el id del usuario que se quiere eliminar.
     * 
     * Si se elimina, entonces recargamos la página.
     * Si NO se elimina, entonces mostrar un error.
      */
    if ( $usuario->eliminar_usuario( $_GET['id'] ) ){
        header( 'Location: ' . ROOT . '/Usuarios/ver.php' );
    }else{
        echo '<div>Error</div>';
    }


?>