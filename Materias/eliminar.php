<?php
include_once('../Config/config.php');
include_once('materias.php');
$materias = new materias();
if ( $materias->eliminar_materias( $_GET['id'] ) ){
 header( 'Location: ' . ROOT . '/Materias/ver.php');
}else{
 echo '<div>Error</div>';
}
?>