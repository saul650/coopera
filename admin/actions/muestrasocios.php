<?php
    include '../controllers/busquedaSocios.php';
    include '../vistas/papeleta_socios.php';
    $dato = $_POST[ 'dato' ];
    $sociosObtenidos = getSociosByPaternoOrNroDoc( $dato );
    tablaSocios( $sociosObtenidos );
?>
   