<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'db_kampus';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection() {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname", 
                $this->username, 
                $this->password
            );
            return $this->conn;
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }
}
