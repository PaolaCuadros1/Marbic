<?php
    include_once('../Config/Database.php');

class Comentario{
    public $conn;
    /* Es la primer función que se ejecuta cuando llamamos la clase*/
    function __construct(){
        $db = new Database();//Queremos crear una nueva conexión a la base de datos.
        $this->conn = $db->__construct(); //Ejecuté la función __construct
        }

        function crear_comentario($datos_comentario){
        $nombre = $datos_comentario['nombre'];
        $apellido = $datos_comentario['apellido'];
        $fecha = $datos_comentario['fecha'];
        $tipo_de_comentario = $datos_comentario['tipo_de_comentario'];
        $comentario = $datos_comentario['comentario'];

        /* INSERT INTO permite guardar información dentro de una tabla indicada, en este caso la tabla es usuarios */
        $guardar_datos = " INSERT INTO comentarios
        VALUES ( NULL, '$nombre', '$apellido', '$fecha', '$tipo_de_comentario', '$comentario')";

        return mysqli_query($this->conn, $guardar_datos);
    }

    function ver_comentarios(){
        $ver_comentarios = " SELECT * FROM comentarios";
        return mysqli_query($this->conn, $ver_comentarios);
    }

    function eliminar_comentario($id){
        $eliminar_comentario = " DELETE FROM comentarios WHERE id = $id  ";
        return mysqli_query($this->conn, $eliminar_comentario);
    }
}
?>