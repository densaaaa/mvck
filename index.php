<?php
require_once './controller/MahasiswaController.php';

$controller = new MahasiswaController();    // Membuat instance dari MahasiswaController
$controller->index();   // Memanggil fungsi index untuk menampilkan data mahasiswa
