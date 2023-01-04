<?php 
    include 'Connection.php';
    class Socios {
        private $id;
        private $nombres;
        private $paterno;
        private $materno;
        private $nro_doc;
        private $expedido;
        private $sexo;
        private $fecha_nac;
        private $estado_civil;
        private $foto;
        private $idlog;
        private $estado;
        private $idlog_coc;
        private $num_correlativo;
        private $estado_kardex;
        private $mindef;
        private $idlog_mindef;

        private $connection;
        
        public function __construct() {
            $this->connection = new Connection();
        }

        public function getAllSocios() {
            $sql = "SELECT * FROM socios";
            $result = $this->connection->getConnection()->query( $sql );
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }

        public function getSocioById( $id ) {
            $sql = "SELECT * FROM socios WHERE id = $id";
            $result = $this->connection->getConnection()->query( $sql );
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }
        
        public function getSocioByNroDoc( $nro_doc ) {
            $sql = "SELECT * FROM socios WHERE nro_doc = '$nro_doc'";
            $result = $this->connection->getConnection()->query( $sql );
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }
        
        public function getSociosByPaterno ( $paterno ) {
            $sql = "SELECT * FROM socios WHERE paterno = '$paterno' or paterno = '%$paterno' or paterno = '$paterno%' or paterno = '%$paterno%'";
            $result = $this->connection->getConnection()->query( $sql );
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }
    }
?>


