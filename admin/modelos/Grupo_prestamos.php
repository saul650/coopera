<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Grupo_prestamos{


	//implementamos nuestro constructor
public function __construct(){

}

public function listar(){
	$sql="SELECT * FROM grupo_prestamos";
	return ejecutarConsulta($sql);
}

//metodo insertar regiustro
public function insertar($id,$aprobados){
	date_default_timezone_set('America/Mexico_City');
$fechac=date('Y-m-d H:i:s');


$sql="INSERT INTO grupo_prestamos ( aprobados) VALUES ('$aprobados','$fecha')";
return ejecutarConsulta($sql);
}



}

 ?>
