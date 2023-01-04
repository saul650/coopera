<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Licencia{


	//implementamos nuestro constructor
public function __construct(){

}

public function listar(){
	$sql="SELECT * FROM licencias";
	return ejecutarConsulta($sql);
}

//metodo insertar regiustro
public function insertar($nombre,$descripcion,$idusuario,$desde,$hasta){
	date_default_timezone_set('America/Mexico_City');
$fechacreada=date('Y-m-d H:i:s');


$sql="INSERT INTO licencias (tipo, desde, hasta, descripcion, creacion, estado, leido, empleado) VALUES ('$nombre','$desde','$hasta','$descripcion','$fechacreada',0,0,'$idusuario')";
return ejecutarConsulta($sql);
}

}

?>
