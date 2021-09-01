<?php

include_once('../Config/config.php');
include_once('clubes.php');// Llamamos al archivo clubes.php

$clubes = new clubes ();

/** Se llama la funcion elimar usuario y se envia el id del usuario que se quiere eliminar. 
 * 
 * Si se elimina, entonces recargamos la pagina.
 * Si NO se elimina, entonces mostrar un error.
 */
if ( $clubes->eliminar_clubes( $_GET['id'] ) ){
 header( 'Location: ' . ROOT . '/clubes/ver.php');
}else{
    echo '<div>Error</div>';
}

?>