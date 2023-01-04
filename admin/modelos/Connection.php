<?php
    class Connection {
        private $DB_NAME;
        private $DB_USER;
        private $DB_PASS;
        private $DB_HOST;
        private $mysqli;
        
        public function __construct() {
            $this->DB_NAME = 'coopera';
            $this->DB_USER = 'root';
            $this->DB_PASS = '';
            $this->DB_HOST = 'localhost';
            $this->mysqli = new mysqli( $this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME );
        }
        
        public function getConnection() {
            return $this->mysqli;
        }
    }
    
?>
