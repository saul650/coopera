<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php
use function PHPSTORM_META\type;

    function tablaSocios ( $arr ) {
        echo '<table class="">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nro. Doc.</th>';
        echo '<th>Nombres</th>';
        echo '<th>Paterno</th>';
        echo '<th>Materno</th>';
        echo '<th>Sexo</th>';
        echo '<th>Fecha Nac.</th>';
        echo '<th>Estado Civil</th>';
        echo '<th>Expedido</th>';
        echo '<th>Foto</th>';
        echo '<th>Prestamo</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        if ($arr){
            foreach($arr as $fila){
                //echo json_encode($arr["nombres"]);
                //echo json_encode($arr);
            echo '<tr>';
            echo '<td>' . $fila ["nro_doc"] . '</td>';
            echo '<td>' . $fila ["nombres"] . '</td>';
            echo '<td>' . $fila ["paterno"] . '</td>';
            echo '<td>' . $fila ["materno"] . '</td>';
            echo '<td>' . $fila ["sexo"] . '</td>';
            echo '<td>' . $fila ["fecha_nac"] . '</td>';
            echo '<td>' . $fila ["estado_civil"] . '</td>';
            echo '<td>' . $fila ["expedido"] . '</td>';
            echo '<td>' . $fila ["foto"] . '</td>';
            echo '<td>';
            echo '<a class="link link-primary" href="../vistas/verSocio.php?id=' . $fila[ 'id' ] . '" >Nuevo </a>';
            echo '</td>';
            echo '</tr>';
        }
    }

        echo '</tbody>';
        echo '</table>';
        
}
?>
