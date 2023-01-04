<?php
// private $nombres;
//         private $paterno;
//         private $materno;
//         private $nro_doc;
//         private $expedido;
//         private $sexo;
//         private $fecha_nac;
//         private $estado_civil;
//         private $foto;
//         private $idlog;
//         private $estado;
//         private $idlog_coc;
//         private $num_correlativo;
//         private $estado_kardex;
//         private $mindef;
//         private $idlog_mindef;
use function PHPSTORM_META\type;

    function tablaSocios ( $arr ) {
        echo '<table class="">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>id</th>';
        echo '<th>id_socio</th>';
        echo '<th>id_tasa</th>';
        echo '<th>observaciones</th>';
        echo '<th>plazo</th>';
        echo '<th>fecha</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        if ($arr){
            foreach($arr as $fila){
                //echo json_encode($arr["nombres"]);
                //echo json_encode($arr);
            echo '<tr>';
            echo '<td>' . $fila ["id"] . '</td>';
            echo '<td>' . $fila ["id_socio"] . '</td>';
            echo '<td>' . $fila ["id_tasa"] . '</td>';
            echo '<td>' . $fila ["observasionew"] . '</td>';
            echo '<td>' . $fila ["plazo"] . '</td>';
            echo '<td>' . $fila ["fecha"] . '</td>';
            echo '<td>';
            echo '</tr>';
        }
    }

        echo '</tbody>';
        echo '</table>';
        
}
?>
