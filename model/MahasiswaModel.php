<?php
require_once './config/database.php';

class MahasiswaModel {
    private $conn;

    public function __construct() {     // Constructor untuk inisialisasi koneksi database  
        $db = new Database();   // Membuat instance dari kelas Database
        $this->conn = $db->getConnection();     // Mendapatkan koneksi database
    }

    public function getAllMahasiswa() {     // Method untuk mengambil semua data mahasiswa
        $sql = "SELECT * FROM mahasiswa";       // Query untuk mengambil data mahasiswa
        $stmt = $this->conn->prepare($sql);     // Prepare statement
        $stmt->execute();   // Eksekusi statement
        return $stmt->fetchAll(PDO::FETCH_ASSOC);       // Mengembalikan hasil sebagai array asosiatif
    }
}
