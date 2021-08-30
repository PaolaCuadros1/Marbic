<?php

include_once('../Config/config.php');
include_once('profesores.php');// Llamamos al archivo Usuario.php

$profesores = new profesores ();

/** Se llama la funcion elimar usuario y se envia el id del usuario que se quiere eliminar. 
 * 
 * Si se elimina, entonces recargamos la pagina.
 * Si NO se elimina, entonces mostrar un error.
 */
if ( $profesores->eliminar_usuario( $_GET['id'] ) ){
 header( 'Location: ' . ROOT . '/Profesores/ver.php');
}else{
    echo '<div>Error</div>';
}

?>