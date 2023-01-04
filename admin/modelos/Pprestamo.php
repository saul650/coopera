<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Prestamo{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($id_tasa,$observaciones,$plazo,$tipo_transaccion,$monto,$fecha,$refinanciamiento){
	$sql="INSERT INTO prestamos (tasa,observaciones,plazo,tipo_transaccion,monto,fecha,refinanciamiento) VALUES ('$id_tasa','$observaciones','$plazo','$tipo_transaccion','$monto','$fecha','$refinanciamiento')";
	return ejecutarConsulta($sql);
}

public function editar($id_tasa,$observaciones,$plazo,$tipo_transaccion,$monto,$fecha,$refinanciamiento){
	$sql="UPDATE prestamos SET id_tasa='$id_tasa',observaciones='$observaciones',plazo='$plazo',tipo_transaccion='$tipo_transaccion,'monto='$monto',fecha='$fecha',refinanciamiento='$refinanciamiento'
	WHERE id='$id'";
	return ejecutarConsulta($sql);
}
// public function desactivar($refinan){
// 	$sql="UPDATE departamento SET fechacreada='0' WHERE iddepartamento='$iddepartamento'";
// 	return ejecutarConsulta($sql);
// }
// public function activar($iddepartamento){
// 	$sql="UPDATE departamento SET fechacreada='1' WHERE iddepartamento='$iddepartamento'";
// 	return ejecutarConsulta($sql);
// }

//metodo para mostrar registros
public function mostrar($id){
	$sql="SELECT * FROM prestamos WHERE id='$id'";
	return ejecutarConsultaSimpleFila($sql);
}

//listar registros
public function listar(){
	$sql="SELECT * FROM prestamos";
	return ejecutarConsulta($sql);
}
//listar y mostrar en selct
public function select(){
	$sql="SELECT * FROM prestamoos";
	return ejecutarConsulta($sql);
}




}

 ?>
