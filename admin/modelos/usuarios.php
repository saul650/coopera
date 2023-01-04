<?php
include 'Conexion.php';
class usuario {
    private $id;
    private $nombre;
    private $contrasena;
    private $rol;
    private $connection;
    public function __construct() {
        $this->connection = new Connection();
    }
    public function getAllUsuarios() {
        $sql = "SELECT * FROM socios";
        $result = $this->connection->getConnection()->query( $sql );
        $socios = array();
        while ($row = $result->fetch_assoc()) {
            $socios[] = $row;
        }
        return $socios;
    }

    public function geUsuariosById( $id ) {
        $sql = "SELECT * FROM socios WHERE id = $id";
        $result = $this->connection->getConnection()->query( $sql );
        $socios = array();
        while ($row = $result->fetch_assoc()) {
            $socios[] = $row;
        }
        return $socios;
    }
    
    public function getUsuariosByNroDoc( $nro_doc ) {
        $sql = "SELECT * FROM socios WHERE nro_doc = '$nro_doc'";
        $result = $this->connection->getConnection()->query( $sql );
        $socios = array();
        while ($row = $result->fetch_assoc()) {
            $socios[] = $row;
        }
        return $socios;
    }
    
    public function getUsuariosByPaterno ( $paterno ) {
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