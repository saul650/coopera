<?php 
require_once "../modelos/Licencia.php";
if (strlen(session_id())<1) 
	session_start();

$departamento=new Licencia();

$iddepartamento=isset($_POST["iddepartamento"])? limpiarCadena($_POST["iddepartamento"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$idusuario=$_SESSION["idusuario"];
// $desde=isset($_POST["desde"])? limpiarCadena($_POST["desde"]):"";
// $hasta=isset($_POST["hasta"])? limpiarCadena($_POST["hasta"]):"";
switch ($_GET["op"]) {
    
  case 'listar':
		$rspta=$departamento->listar();
		$data=Array();
    $solucion="sin leer";
    $solu="222";
		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
        "0"=>'<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>'.'<button class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button>',
        
            "1"=>$reg->tipo,
            "2"=>$reg->desde,
            "3"=>$reg->hasta,
            "4"=>$reg->descripcion,
            "5"=>$reg->creacion,
            "6"=>$reg->comentarios,
            "7"=>($reg->estado)==1?'Aprobado':'Rechasado o Pendiente',
            "8"=>($reg->leido)==0?'Sin Leer':'Leido',
           
            "9"=>$reg->empleado
              );
		}
		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);   
		break;


    case 'guardaryeditar':
      if (empty($iddepartamento)) {
        $desde=$_REQUEST["desde"];
        $hasta=$_REQUEST["hasta"];
        $rspta=$departamento->insertar($nombre,$descripcion,$idusuario,$desde,$hasta);
        echo $rspta ? "Datos registrados correctamente" : "No se pudo registrar los datos";
      }else{
        //      $rspta=$departamento->editar($iddepartamento,$nombre,$descripcion,$idusuario);
        // echo $rspta ? "Datos actualizados correctamente" : "No se pudo actualizar los datos";
      }
        break;
}
?>