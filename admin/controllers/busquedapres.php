<?php
    include '../modelos/Socios.php';
    include '../modelos/Prestamos.php';
    include '../modelos/Tasa.php';
    function TipoPrestamo ( $dato ) {
        $prestasmo = new Prestamo();
        $tipo = array();

            $sociosObtenidos = $socios->getSocioByNroDoc( $dato );
        
    }
?>
//crear de una based de dato ]

<!-- include '../models/Socios.php';
    function getSociosByPaternoOrNroDoc ( $dato ) {
        $socios = new Socios();
        $sociosObtenidos = array();
        if ( is_numeric( $dato ) )
            $sociosObtenidos = $socios->getSocioByNroDoc( $dato );
        else
            $sociosObtenidos =  $socios->getSociosByPaterno( $dato );
        return $sociosObtenidos;
    }
  
    include '../models/Socios.php';
    include '../models/SociosInstitucion.php';
    function getSocios ( $dato ,$busqueda ) {
        $socios = new Socios();
        $sociosObtenidos = array();
        if ( strcmp( $busqueda, 'ci' ) == 0)
            $sociosObtenidos = $socios->getSocioByNroDoc( $dato );
        else if( strcmp( $busqueda, 'apellido' ) == 0 )
            $sociosObtenidos =  $socios->getSociosByPaterno( $dato );
        else {
            $sociosInstitucionales = new SociosInstitucion();
            $socioInstitucional = $sociosInstitucionales->getSocioInstitucionByPapeleta( $dato );
            if ($socioInstitucional)
                $sociosObtenidos =  $socios->getSocioById( $socioInstitucional[ 'id_socio' ] );
        }
        return $sociosObtenidos; -->

