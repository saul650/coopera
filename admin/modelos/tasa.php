<?php 
require "../config/Conexion.php";
    class tasa {
        private $id_tasa;
        private $descripcion_tasa;
        private $porcentaje;
        private $cod_desc;
        private $tipo_moneda;
        private $min_defensa;
        private $itf;
        private $int_penal;
        private $papeleria;
        private $monto_max;
        private $plazo_max;
        private $garante;
        private $obs;
        private $tipo_tasa;
        private $id_log;

        private $connection;
        
        public function __construct() {
            $this->connection = new Connection();
        }

        public function getAllSocios() {
            $sql = "SELECT * FROM socios";
            $result = $this->connection->getConnection()->query($sql);
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }

        public function getSocioById( $id ) {
            $sql = "SELECT * FROM socios WHERE id = $id";
            $result = $this->connection->getConnection()->query($sql);
            $socio = $result->fetch_assoc();
            return $socio;
        }
        
        public function getSocioByNroDoc( $nro_doc ) {
            $sql = "SELECT * FROM socios WHERE nro_doc = '$nro_doc'";
            $result = $this->connection->getConnection()->query($sql);
            $socio = $result->fetch_assoc();
            return $socio;
        }
        
        public function getSociosByPaterno ( $paterno ) {
            $sql = "SELECT * FROM socios WHERE paterno = '$paterno'";
            $result = $this->connection->getConnection()->query($sql);
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }
    }
?>


