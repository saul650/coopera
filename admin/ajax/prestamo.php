<?php 
require_once "../modelos/Pprestamo.php";

if (strlen(session_id())<1) 
	session_start();

$prestamo=new Prestamo();
//$id_socio, $id_tasa, $observaciones, $plazo, $tipo_transaccion , $monto ,$fecha ,$refinanciamiento
$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$id_socio=isset($_POST["id_socio"])? limpiarCadena($_POST["id_socio"]):"";
$id_tasa=isset($_POST["id_tasa"])? limpiarCadena($_POST["id_tasa"]):"";
$observaciones=isset($_POST["observaciones"])? limpiarCadena($_POST["observaciones"]):"";
$plazo=isset($_POST["plazo"])? limpiarCadena($_POST["plazo"]):"";
$tipo_transaccion=isset($_POST["tipo_transaccion"])? limpiarCadena($_POST["tipo_transaccion"]):"";
$monto=isset($_POST["monto"])? limpiarCadena($_POST["monto"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$refinanciamiento=isset($_POST["refinanciamiento"])? limpiarCadena($_POST["refinanciamiento"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
	if (empty($id)) {
		$rspta=$prestamo->insertar($id_socio, $id_tasa, $observaciones, $plazo, $tipo_transaccion , $monto ,$fecha ,$refinanciamiento);
		echo $rspta ? "Datos registrados correctamente" : "No se pudo registrar los datos";
	}else{
         $rspta=$prestamo->editar($id_socio, $id_tasa, $observaciones, $plazo, $tipo_transaccion , $monto ,$fecha ,$refinanciamiento);
		echo $rspta ? "Datos actualizados correctamente" : "No se pudo actualizar los datos";
	}
		break;
	

	case 'desactivar':
		$rspta=$prestamo->desactivar($id);
		echo $rspta ? "Datos desactivados correctamente" : "No se pudo desactivar los datos";
		break;
	case 'activar':
		$rspta=$prestamo->activar($id);
		echo $rspta ? "Datos activados correctamente" : "No se pudo activar los datos";
		break;
	
	case 'mostrar':
		$rspta=$prestamo->mostrar($id);
		echo json_encode($rspta);
		break;

    case 'listar':
		$rspta=$prestamo->listar();
		$data=Array();
//$id_socio, $id_tasa, $observaciones, $plazo, $tipo_transaccion , $monto ,$fecha ,$refinanciamiento

		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
			"0"=>'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->id.')"><i class="fa fa-pencil"></i></button>',
			"1"=>$reg->id,
			"2"=>$reg->id_socio,
			"3"=>$reg->id_tasa,
			"4"=>$reg->observaciones,
			"5"=>$reg->plazo,
			"6"=>$reg->tipo_transaccion,
			"7"=>$reg->monto,
            "8"=>$reg->fecha,
            "9"=>($reg->refinanciamiento)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>'
			//"7"=>($reg->estado)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>'


              );
		}
		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);   
		break;

		case 'selectPrestamo':
			$rspta=$prestamo->select();
			echo '<option value="0">seleccione...</option>';
			while ($reg=$rspta->fetch_object()) {
				echo '<option value=' . $reg->id.'>'.$reg->nombre.'</option>';
			}
			break;
}
 ?>