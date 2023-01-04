<?php
    include '../modelos/Socios.php';
    function getSociosByPaternoOrNroDoc ( $dato ) {
        $socios = new Socios();
        $sociosObtenidos = array();
        if ( is_numeric( $dato ) )
            $sociosObtenidos = $socios->getSocioByNroDoc( $dato );
        else
            $sociosObtenidos =  $socios->getSociosByPaterno( $dato );
        return $sociosObtenidos;
    }
?>
