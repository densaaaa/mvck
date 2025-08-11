<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'db_m';
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
            return $this->conn; // Mengembalikan koneksi database
        } catch (PDOException $e) {         // Menangani kesalahan koneksi
            die("Koneksi gagal: " . $e->getMessage());      // Menangani kesalahan koneksi
        }
    }
}
