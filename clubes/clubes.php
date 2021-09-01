<?php
include_once('../config/Database.php');
class clubes{
    public $conn;
    function __construct(){
        $db=new Database();
        $this->conn=$db-> __construct();
     }



     function crear_clubes($datos_clubes){ 
     $nombre_del_club= $datos_clubes['nombre_del_club'];
     $apellido = $datos_clubes['apellido'];
     $correo_electronico = $datos_clubes['correo_electronico'];
     $contrasena = $datos_clubes['contrasena'];
     $rol = $datos_clubes['rol'];
     $celular=$datos_clubes['celular'];

$guardar_datos="INSERT INTO clubes 
VALUES(NULL,'$nombre_del_club ' , '$apellido' , '$correo_electronico' , '$contrasena' , $celular , '$rol' ) ";

return mysqli_query($this->conn, $guardar_datos);

    }
    function ver_clubes(){
        $ver_clubes="SELECT * FROM clubes ";
        return mysqli_query($this->conn, $ver_clubes);
    }
        function eliminar_clubes($id){
            $eliminar_clubes = " DELETE FROM clubes WHERE id = $id  ";
            return mysqli_query($this->conn, $eliminar_clubes);
        }

    
       
}
 
?>   