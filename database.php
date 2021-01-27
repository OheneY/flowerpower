<?php  
    class database{

        private $host;
        private $dbh;
        private $user;
        private $pass;
        private $db;

        function __construct(){
            $this->host = 'localhost';
            $this->user = 'root';
            $this->pass = '';
            $this->db = 'flowerpower';

        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $this->dbh = neW PDO($dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            die("unable to connect: " . $e->getMessage());

        
            }
        }
    }
?>