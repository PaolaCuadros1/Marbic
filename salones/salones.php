<?php 

include_once('../Config/Database.php');
class salones{
public $conn;

/* Es la primer función que se ejecuta cuando llamamos la clase  */
function __construct(){
    $db = new Database();//Queremos crear una nueva conexión a la base de datos.
    $this->conn = $db->__construct(); //Ejecuté la función __construct.
}

function crear_elemento($datos_salones){
    $nombre = $datos_salones ['nombre'];
    $numero_sillas = $datos_salones ['numero_sillas'];
    $numero_mesas = $datos_salones ['numero_mesas'];
    $numero_mesas_grande = $datos_salones['numero_mesas_grande'];
    $numero_televisor = $datos_salones ['numero_televisor'];
    $numero_puerta_corrediza = $datos_salones ['numero_puerta_corrediza'];
    $numero_microscopio = $datos_salones ['numero_microscopio'];
    $numero_antibacterial = $datos_salones ['numero_antibacterial'];
    $numero_alcohol = $datos_salones ['numero_alcohol'];
    $numero_toallas = $datos_salones['numero_toallas'];
    $numero_balones = $datos_salones['numero_balones'];
    
$guardar_datos = " INSERT INTO  salones VALUES ( NULL, '$nombre', $numero_sillas, $numero_mesas, $numero_mesas_grande, $numero_televisor, $numero_puerta_corrediza, $numero_microscopio, $numero_antibacterial, $numero_alcohol , $numero_toallas, $numero_balones)";

return mysqli_query($this->conn, $guardar_datos);


}
function ver_salones(){
    $ver_salones = " SELECT * FROM salones";
    return mysqli_query($this->conn, $ver_salones);
}

}