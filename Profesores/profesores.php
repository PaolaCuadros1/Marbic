<?php 

include_once('../Config/Database.php');
class profesores{
public $conn;

function __construct(){
$db = new Database();
$this->conn = $db->__construct();
}
function crear_profesor($datos_profesores){
$nombre = $datos_profesores ['nombre'];
$apellido = $datos_profesores ['apellido'];
$correo_electronico = $datos_profesores ['correo_electronico'];
$telefono = $datos_profesores ['telefono'];
$edad = $datos_profesores ['edad'];
$fecha_de_nacimiento = $datos_profesores ['fecha_de_nacimiento'];
$lugar_de_nacimiento = $datos_profesores ['lugar_de_nacimiento'];
$foto_perfil = $datos_profesores ['foto_perfil'];


$guardar_datos = " INSERT INTO profesores VALUES ( NULL, '$nombre', '$apellido', '$correo_electronico', $telefono, '$edad', '$fecha_de_nacimiento', '$lugar_de_nacimiento', '$foto_perfil' )";
echo $guardar_datos;
return mysqli_query($this->conn, $guardar_datos);


}

function ver_profesores(){
    $ver_profesores = " SELECT * FROM profesores";
    return mysqli_query($this->conn, $ver_profesores);
}

function eliminar_usuario($id){
    $eliminar_usuario = " DELETE FROM profesores WHERE id = $id " ;
    return mysqli_query($this->conn, $eliminar_usuario);
}



}

?>