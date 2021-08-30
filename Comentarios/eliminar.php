<?php 

    include_once('../Config/config.php');
    include_once('comentario.php'); //Llamamos al archivo Usuario.php

    $comentario = new Comentario();
    
    /** Se llama la función eliminar usuario y se envía el id del usuario que se quiere eliminar.
     * 
     * Si se elimina, entonces recargamos la página.
     * Si NO se elimina, entonces mostrar un error.
      */
    if ( $comentario->eliminar_comentario( $_GET['id'] ) ){
        header( 'Location: ' . ROOT . '/Comentarios/ver.php' );
    }else{
        echo '<div>Error</div>';
    }


?>