<?php 
/** Controlador: El cual permite controlar todas las acciones que se realizarán respecto al usuario.  */
    include_once('../Config/Database.php');

    class Usuario{
        public $conn;

        /* Es la primer función que se ejecuta cuando llamamos la clase  */
        function __construct(){
            $db = new Database();//Queremos crear una nueva conexión a la base de datos.
            $this->conn = $db->__construct(); //Ejecuté la función __construct.
        }


        function crear_usuario($datos_usuario){
            $nombre = $datos_usuario['nombre'];
            $apellido = $datos_usuario['apellido'];
            $correo_electronico = $datos_usuario['correo_electronico'];
            $contrasena = $datos_usuario['contrasena'];
            $celular = $datos_usuario['celular'];
            $rol = $datos_usuario['rol'];

            /* INSERT INTO permite guardar información detntro de una tabla indicada, en este caso la tabla es usuarios */
            $guardar_datos = " INSERT INTO usuarios
            VALUES ( NULL, '$nombre', '$apellido', '$correo_electronico', '$contrasena', $celular, '$rol' ) ";

            return mysqli_query($this->conn, $guardar_datos);

        }


        function ver_usuarios(){
            $ver_usuarios = " SELECT * FROM usuarios";
            return mysqli_query($this->conn, $ver_usuarios);
        }

        function eliminar_usuario($id){
            $eliminar_usuario = " DELETE FROM usuarios WHERE id = $id  ";
            return mysqli_query($this->conn, $eliminar_usuario);
        }


    }

?>