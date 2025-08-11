<?php
require_once './model/MahasiswaModel.php';

class MahasiswaController {
    public function index() {           //fungsi yang di panggil di index.php
        $model = new MahasiswaModel();      // Membuat instance dari MahasiswaModel
        $data = $model->getAllMahasiswa();  // Mengambil data mahasiswa dari model
        include './view/mahasiswa_view.php';   // Memasukkan data ke dalam view
    }
}
