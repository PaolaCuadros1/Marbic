<?php
     
     include_once('../Config/Database.php');    
     class materias{
         public $conn;

         function __construct(){
             $db = new Database();
             $this->conn = $db->__construct();
         }
         
         
     function crear_materias($datos_materias){    
            $Materia = $datos_materias['Materia'];
            $profesor = $datos_materias['profesor'];
            $grado = $datos_materias['grado'];
           

            $guardar_datos = " INSERT INTO materias  VALUES (NULL, '$Materia', '$profesor', $grado)";

            return mysqli_query($this->conn, $guardar_datos);

            }
            function ver_materias(){
         $ver_materias = "SELECT * FROM materias";
         return mysqli_query($this->conn, $ver_materias);
            }
            function eliminar_materias($id){
                $eliminar_materias = "DELETE FROM materias WHERE id = $id ";
                return mysqli_query($this->conn, $eliminar_materias);
    }
        }
 ?>