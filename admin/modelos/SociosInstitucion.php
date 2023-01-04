<?php 
require "../config/Conexion.php";
    class SociosInstitucion {
        private $id;
        private $id_socio;
        private $papeleta;
        private $carnet_mil;
        private $cossmil;
        private $afil_mes;
        private $afil_anio;
        private $anio_prom;
        private $salario;
        private $estado;
        private $devolAportes;
        private $devolcapitalizacion;
        private $id_coc;
        private $connection;
        
        public function __construct() {
            $this->connection = new Connection();
        }

        public function getAllSociosInstitucion() {
            $sql = "SELECT * FROM socio_institucion";
            $result = $this->connection->getConnection()->query( $sql );
            $sociosInstitucionales = array();
            while ($row = $result->fetch_assoc()) {
                $sociosInstitucionales[] = $row;
            }
            return $sociosInstitucionales;
        }

        public function getSocioInstitucionById( $id ) {
            $sql = "SELECT * FROM socio_institucion WHERE id = $id";
            $result = $this->connection->getConnection()->query( $sql );
            $socioInstitucional = $result->fetch_assoc();
            return $socioInstitucional ;
        }
        
        public function getSocioInstitucionByPapeleta( $papeleta ) {
            $sql = "SELECT * FROM socio_institucion WHERE papeleta = '$papeleta'";
            $result = $this->connection->getConnection()->query( $sql );
            $socioInstitucional = $result->fetch_assoc();
            return $socioInstitucional;
        }
        
    }
?>


